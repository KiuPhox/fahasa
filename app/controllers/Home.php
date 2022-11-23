<?php

require_once('./app/models/Book.php');
require_once('./app/models/Category.php');
require_once('./app/models/Rating.php');

class Home
{
    public function product($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $book = Book::getByID($id);
        $ratings = Rating::getAllByBookID($id);
        $reviews = [0, 0, 0, 0, 0];

        foreach ($ratings as $rating) {
            $reviews[$rating['rating'] - 1]++;
        }
        $total_reviews = array_sum($reviews);

        if ($total_reviews > 0) {
            $rating_value = 0;
            for ($i = 1; $i <= 5; $i++) {
                $rating_value += $i * $reviews[$i - 1] / $total_reviews;
            }
        }
        require("./app/views/home/product.php");
    }

    public function category()
    {
        $categories = Category::getAll();
        $books = Book::getAll();

        require("./app/views/home/category.php");
    }

    public function index()
    {
        require("./app/views/home/index.php");
    }
}
