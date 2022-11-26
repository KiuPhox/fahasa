<?php
require_once('./app/models/Cart.php');
require_once('./app/models/Book.php');
class CartController
{
    public function index()
    {
        $total = 0;
        require("./app/views/user/home/cart.php");
    }

    public function addToCart()
    {
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];


        if (empty($_SESSION['cart'][$id])) {
            $book = Book::getByID($id);
            $_SESSION['cart'][$id]['title'] = $book['title'];
            $_SESSION['cart'][$id]['image'] = $book['image'];
            $_SESSION['cart'][$id]['price'] = $book['price'];
            $_SESSION['cart'][$id]['discount'] = $book['discount'];
            $_SESSION['cart'][$id]['quantity'] = $quantity;
        } else {
            $_SESSION['cart'][$id]['quantity'] += $quantity;
        }
        var_dump($_SESSION['cart']);
    }
}
