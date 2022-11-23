<?php

require_once('./core/model.php');

class Book extends Model
{
    public function getSpecialPrice()
    {
        echo $this->discount;
    }

    public static function getAll()
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');

        $sql = "SELECT * from books";

        if (isset($_GET["q"])) {
            $q = $_GET["q"];
            $sql = "SELECT * from books WHERE title LIKE '%$q%'";
            if (isset($_GET["c"])) {
                $c = $_GET["c"];
                $categories = Category::getAll();

                foreach ($categories as $category) {
                    if ($c == $category['name']) {
                        $sql = "SELECT * from books WHERE title LIKE '%$q%' AND category_id = " . $category['id'];
                    }
                }
            }
        } else {
            if (isset($_GET["c"])) {
                $c = $_GET["c"];
                $categories = Category::getAll();

                foreach ($categories as $category) {
                    if ($c == $category['name']) {
                        $sql = "SELECT * from books WHERE category_id = " . $category['id'];
                    }
                }
            }
        }




        return mysqli_query($conn, $sql);
    }
}
