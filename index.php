<?php

session_start();
require_once('core/router.php');

$router = new Router();


$router->add("", ['controller' => 'Home', 'action' => 'index']);

$router->add('product/{id:\d+}', ['controller' => 'Home', 'action' => 'product']);
$router->add('category', ['controller' => 'Home', 'action' => 'category']);
$router->add('login', ['controller' => 'Login', 'action' => 'index']);


$router->dispatch($_SERVER['QUERY_STRING']);
