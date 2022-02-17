<?php

session_start();

require("../src/init.php");

$pathInfo = $_SERVER['PATH_INFO'];

if (!isset($pathInfo)) {
    $pathInfo = "/";
}

$routes = [
    '/' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'show'
    ],
    '/login' => [
        'controller' => 'loginController',
        'method' => 'login'
    ],
    '/dashboard' => [
        'controller' => 'loginController',
        'method' => 'dashboard'
    ],
    '/posts-admin' => [
        'controller' => 'postsAdminController',
        'method' => 'index'
    ],
    '/posts-edit' => [
        'controller' => 'postsAdminController',
        'method' => 'edit'
    ],
    '/logout' => [
        'controller' => 'loginController',
        'method' => 'logout'
    ]
];

if (isset($routes[$pathInfo])) {
    $route = $routes[$pathInfo];
    $controller = $container->make($route['controller']);
    $method = $route['method'];
    $controller->$method();
}

?>
