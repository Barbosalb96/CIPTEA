<?php

use FastRoute\RouteCollector;

return function (RouteCollector $router) {
    $router->addRoute('GET', '/', ['App\Controller\FormController', 'index']);
    $router->addRoute('POST', '/store', ['App\Controller\UsuarioController', 'store']);
};
