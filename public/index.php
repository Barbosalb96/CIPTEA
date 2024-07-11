<?php

require '../vendor/autoload.php';
include '../config/config.php';

require '../config/database.php';

dd(\App\Model\User::all());

use function FastRoute\simpleDispatcher;

$dispatcher = simpleDispatcher(require '../routes/routes.php');

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        http_response_code(404);
        echo '404 Not Found';
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        http_response_code(405);
        echo '405 Method Not Allowed';
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        [$controller, $method] = $handler;
        call_user_func_array([new $controller, $method], $vars);
        break;
}


function getVaultToken()
{
    $url = "https://vault.seati.ma.gov.br/v1/auth/approle/login";

    $data = json_encode([
        "role_id" => getenv('ROLE_ID'),
        "secret_id" => getenv('SECRET_ID'),
    ]);

    $headers = [
        "Content-Type: application/json"
    ];

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpcode == 200) {
        $responseData = json_decode($response, true);
        return $responseData['auth']['client_token'];
    } else {
        throw new Exception("Erro ao autenticar: " . $httpcode . " - " . $response);
        die();
    }

    curl_close($ch);
}


function getApiKeys($token)
{
    $url = "https://vault.seati.ma.gov.br/v1/web-team/api-keys";

    $headers = [
        "accept: */*",
        "accept-language: pt-PT,pt;q=0.9,en-US;q=0.8,en;q=0.7",
        "dnt: 1",
        "priority: u=1, i",
        "referer: https://vault.seati.ma.gov.br/ui/vault/secrets/web-team/show/api-keys",
        "sec-ch-ua: \"Not/A)Brand\";v=\"8\", \"Chromium\";v=\"126\", \"Google Chrome\";v=\"126\"",
        "sec-ch-ua-mobile: ?0",
        "sec-ch-ua-platform: \"Windows\"",
        "sec-fetch-dest: empty",
        "sec-fetch-mode: cors",
        "sec-fetch-site: same-origin",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36",
        "x-vault-token: $token"
    ];

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($httpcode == 200) {
        $responseData = json_decode($response, true);
    } else {
        echo "Erro ao obter chaves da API: " . $httpcode . " - " . $response;
    }

    curl_close($ch);
    return $responseData;
}
