<?php


abstract class Model
{
    protected static $conn = null;

    protected static function connect()
    {
        if (self::$conn === null) {
            self::$conn = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_DATABASE']);
            mysqli_set_charset(self::$conn, 'utf8');
        }
        return self::$conn;
    }

    public static function pluralize($singular)
    {
        $last_letter = strtolower($singular[strlen($singular) - 1]);
        switch ($last_letter) {
            case 'y':
                return substr($singular, 0, -1) . 'ies';
            case 's':
                return $singular . 'es';
            default:
                return $singular . 's';
        }
    }

    protected static function executeQuery($sql, $params = [])
    {
        $conn = self::connect();
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt === false) {
            // Handle error here
            return false;
        }
        if (!empty($params)) {
            mysqli_stmt_bind_param($stmt, ...$params);
        }
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $result;
        } else {
            // Handle error here
            mysqli_stmt_close($stmt);
            return false;
        }
    }

    public static function destroy($id)
    {
        $table_name = self::pluralize(get_called_class());
        $sql = "DELETE FROM $table_name WHERE id = ?";
        $params = ['i', $id];
        return self::executeQuery($sql, $params);
    }

    public static function getAll()
    {
        $table_name = self::pluralize(get_called_class());
        $sql = "SELECT * FROM $table_name";
        return self::executeQuery($sql);
    }

    public static function getByID($id)
    {
        $table_name = self::pluralize(get_called_class());
        $sql = "SELECT * FROM $table_name WHERE id = ?";
        $params = ['i', $id];
        $result = self::executeQuery($sql, $params);
        return mysqli_fetch_array($result);
    }

    public static function getByUserID($id)
    {
        $table_name = self::pluralize(get_called_class());
        $sql = "SELECT * FROM $table_name WHERE user_id = ?";
        $params = ['i', $id];
        return self::executeQuery($sql, $params);
    }

    public static function deleteByUserID($id)
    {
        $table_name = self::pluralize(get_called_class());
        $sql = "DELETE FROM $table_name WHERE user_id = ?";
        $params = ['i', $id];
        return self::executeQuery($sql, $params);
    }
}
