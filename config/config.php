<?php
$env_file_path = __DIR__ . '/../.env';
function loadEnv($env_file_path)
{
    if (!file_exists($env_file_path)) {
        throw new Exception(".env file not found at path: $env_file_path");
    }

    $lines = file($env_file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) {
            continue;
        }
        list($name, $value) = explode('=', $line, 2);

        $name = trim($name);
        $value = trim($value);

        putenv("$name=$value");
        $_ENV[$name] = $value;
        $_SERVER[$name] = $value;
    }
}

try {
    loadEnv($env_file_path);
} catch (Exception $e) {
    throw new Exception($e->getMessage());
}
