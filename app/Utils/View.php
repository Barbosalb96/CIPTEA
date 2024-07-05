<?php

namespace App\Utils;

class view
{
    public static function render(string $view, array $params = [])
    {
        extract($params);

        $viewPath = __DIR__ . '/../../view/' . $view . '.php';

        if (file_exists($viewPath)) {
            require $viewPath;
        } else {
            echo "View file not found: $viewPath";
        }
    }
}
