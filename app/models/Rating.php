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
}
