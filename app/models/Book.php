<?php

require_once('./core/model.php');
require_once('./app/models/Rating.php');

class Book extends Model
{

    public static function store($title, $author, $category_id, $supplier_id, $publisher_id, $publication_date, $image, $description, $price, $discount, $quantity, $page_quantity, $book_code)
    {
        $sql = "INSERT INTO books 
        (title, author, category_id, supplier_id, publisher_id, publication_date, image, description, price, discount, quantity, page_quantity, book_code)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $params = ['ssiiisssdiiss', $title, $author, $category_id, $supplier_id, $publisher_id, $publication_date, $image, $description, $price, $discount, $quantity, $page_quantity, $book_code];

        self::executeQuery($sql, $params);
    }

    public static function update($id, $title, $author, $category_id, $supplier_id, $publisher_id, $publication_date, $image, $description, $price, $discount, $quantity, $page_quantity, $book_code)
    {
        $sql = "UPDATE books 
        SET title = ?, 
        author = ?, 
        category_id = ?, 
        supplier_id = ?, 
        publisher_id = ?, 
        publication_date = ?, 
        image = ?, 
        description = ?, 
        price = ?, 
        discount = ?, 
        quantity = ?, 
        page_quantity = ?, 
        book_code = ?
        WHERE id = ?";

        $params = ['ssiiisssdiissi', $title, $author, $category_id, $supplier_id, $publisher_id, $publication_date, $image, $description, $price, $discount, $quantity, $page_quantity, $book_code, $id];

        self::executeQuery($sql, $params);
    }

    public static function updateQuantity($quantity, $id)
    {
        $sql = "UPDATE books SET quantity = ? WHERE id = ?";

        $params = ['ii', $quantity, $id];

        self::executeQuery($sql, $params);
    }

    // public function getSpecialPrice()
    // {
    //     echo $this->discount;
    // }

    public static function getRating($id)
    {
        $ratings = Rating::getAllByBookID($id);

        if ($ratings->num_rows == 0) {
            return 0;
        }

        $total_rating = 0;

        foreach ($ratings as $rating) {
            $total_rating += $rating['rating'];
        }

        return $total_rating / $ratings->num_rows;
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM books";
        $params = [];

        if (isset($_GET["q"])) {
            $q = $_GET["q"];
            $sql .= " WHERE title LIKE ?";
            $params = ['s', "%$q%"];

            if (isset($_GET["c"])) {
                $c = $_GET["c"];
                $categories = Category::getAll();

                foreach ($categories as $category) {
                    if ($c == $category['name']) {
                        $sql .= " AND category_id = ?";
                        $params = ['i', $category['id']];
                        break;
                    }
                }
            }
        } else {
            if (isset($_GET["c"])) {
                $c = $_GET["c"];
                $categories = Category::getAll();

                foreach ($categories as $category) {
                    if ($c == $category['name']) {
                        $sql .= " WHERE category_id = ?";
                        $params = ['i', $category['id']];
                        break;
                    }
                }
            }
        }
        return self::executeQuery($sql, $params);
    }
}
