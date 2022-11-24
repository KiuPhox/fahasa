<?php

session_start();
require_once('core/router.php');

$router = new Router();

// Home
$router->add("", ['controller' => 'Home', 'action' => 'index']);
$router->add('product/{id:\d+}', ['controller' => 'Home', 'action' => 'product']);
$router->add('category', ['controller' => 'Home', 'action' => 'category']);

// Cart
$router->add('checkout/cart', ['controller' => 'Cart', 'action' => 'index']);

// Login

$router->add('login', ['controller' => 'Login', 'action' => 'index']);
$router->add('login/login_process', ['controller' => 'Login', 'action' => 'login']);
$router->add('login/logout_process', ['controller' => 'Login', 'action' => 'logout']);


//Customer
$router->add('customer/account', ['controller' => 'Customer', 'action' => 'account']);
$router->dispatch($_SERVER['QUERY_STRING']);
