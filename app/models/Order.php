<?php

require_once('./core/model.php');

class Order extends Model
{
    public static function store($name, $phone_number, $address, $city, $district, $ward, $total, $user_id, $cart)
    {
        $conn = self::connect();
        $sql = "INSERT INTO orders (name, phone_number, address, city, district, ward, total, user_id)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $params = ['sssssssi', $name, $phone_number, $address, $city, $district, $ward, $total, $user_id];

        self::executeQuery($sql, $params);
        $order_id = mysqli_insert_id($conn);

        foreach ($cart as $book_id => $book) {
            if ($book['checked'] == "true") {
                $conn = self::connect();
                $quantity = $book['quantity'];
                $sql = "INSERT INTO order_details (order_id, book_id, quantity)
                VALUES (?, ?, ?)";
                $params = ['iii', $order_id, $book_id, $quantity];
                self::executeQuery($sql, $params);

                unset($_SESSION['cart'][$book_id]);
            }
        }
    }

    public static function getByUserID($id)
    {
        $sql = "SELECT * from orders WHERE user_id = ? ORDER BY id DESC";
        $params = ['i', $id];
        return self::executeQuery($sql, $params);
    }

    public static function destroy($id)
    {
        $conn = self::connect();
        $sql = "DELETE from order_details WHERE order_id = ?";
        $params = ['i', $id];
        self::executeQuery($sql, $params);
        $sql = "DELETE from orders WHERE id = $id";
        mysqli_query($conn, $sql);
    }

    public static function cancel($id)
    {
        $sql = "UPDATE orders SET status = 2 WHERE id = ?";
        $params = ['i', $id];
        self::executeQuery($sql, $params);
    }

    public static function confirm($id)
    {
        $sql = "UPDATE orders SET status = 1 WHERE id = ?";
        $params = ['i', $id];
        self::executeQuery($sql, $params);
    }
}
