<?php
$conn = mysqli_connect("localhost", "root", "", "Fahasa");
mysqli_set_charset($conn, 'utf8');
session_start();
require_once('core/router.php');

$router = new Router();

// Home
$router->add("", ['controller' => 'Home', 'action' => 'index']);
$router->add('product/{id:\d+}', ['controller' => 'Home', 'action' => 'product']);
$router->add('category', ['controller' => 'Home', 'action' => 'category']);

// Cart
$router->add('checkout/cart', ['controller' => 'CartController', 'action' => 'index']);
$router->add('cart/addtocart', ['controller' => 'CartController', 'action' => 'addToCart']);
$router->add('cart/check', ['controller' => 'CartController', 'action' => 'toggleCheckBook']);
$router->add('cart/checkall', ['controller' => 'CartController', 'action' => 'checkAll']);
$router->add('cart/add', ['controller' => 'CartController', 'action' => 'addQuantity']);
$router->add('cart/subtract', ['controller' => 'CartController', 'action' => 'subtractQuantity']);
$router->add('cart/delete', ['controller' => 'CartController', 'action' => 'deleteItem']);
// Login

$router->add('login', ['controller' => 'Login', 'action' => 'index']);
$router->add('login/login_process', ['controller' => 'Login', 'action' => 'login']);
$router->add('login/logout_process', ['controller' => 'Login', 'action' => 'logout']);

// Customer
$router->add('customer/account', ['controller' => 'Customer', 'action' => 'account']);
$router->add('customer/account/edit', ['controller' => 'Customer', 'action' => 'accountEdit']);
$router->add('customer/account/editPost', ['controller' => 'Customer', 'action' => 'accountEditPost']);
$router->add('customer/account/updatePassword', ['controller' => 'Customer', 'action' => 'accountUpdatePaswword']);
// Rating
$router->add('product/rating', ['controller' => 'Home', 'action' => 'rating']);

$router->dispatch($_SERVER['QUERY_STRING']);
