<?php

require_once('./core/model.php');

class Rating extends Model
{
    public static function getAllByBookID($id)
    {
        $sql = "SELECT * FROM ratings WHERE book_id = ? ORDER BY created_at DESC";
        $params = ['i', $id];
        return self::executeQuery($sql, $params);
    }

    public static function post($book_id, $user_id, $rating, $comment)
    {
        $sql = "INSERT INTO ratings (book_id, user_id, rating, comment) VALUES (?, ?, ?, ?)";
        $params = ['iiis', $book_id, $user_id, $rating, $comment];
        self::executeQuery($sql, $params);
    }

    public static function approve($id)
    {
        $sql = "UPDATE ratings SET is_approved = 1 WHERE id = $id";
        $params = ['i', $id];
        self::executeQuery($sql, $params);
    }
}
