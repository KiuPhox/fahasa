<?php

require_once('./core/model.php');

class Rating extends Model
{
    public static function getAllByBookID($id)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        return mysqli_query($conn, "SELECT * FROM ratings WHERE book_id = $id");
    }

    public static function post($book_id, $user_id, $rating, $comment)
    {
        $conn = mysqli_connect("localhost", "root", "", "Fahasa");
        mysqli_set_charset($conn, 'utf8');
        $sql = "INSERT INTO ratings (book_id, user_id, rating, comment)
        VALUES ($book_id, $user_id, $rating, '$comment')";
        mysqli_query($conn, $sql);
    }
}
