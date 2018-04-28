<?php

class User
{
    /**
     * @param $name
     * @return bool
     */
    public static function checkName($name)
    {
        return strlen($name) >= 2;
    }

    /**
     * @param $email
     * @return bool
     */
    public static function checkEmail($email)
    {
        return is_string(filter_var($email, FILTER_VALIDATE_EMAIL));
    }

    /**
     * @param $email
     * @return bool
     */
    public static function checkEmailExists($email)
    {
        $db = Db::getDb();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email);
        $result->execute();

        if ($result->fetchColumn()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param $password
     * @return bool
     */
    public static function checkPassword($password)
    {
        return strlen($password) >= 6;
    }

    /**
     * @param $name
     * @param $email
     * @param $password
     * @return bool
     */
    public static function register($name, $email, $password)
    {
        $db = Db::getDb();

        $sql = 'INSERT INTO user (name, email, password) '
            . 'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);

        return $result->execute();
    }

    /**
     * @param $email
     * @param $password
     * @return bool|mixed : integer user id or false
     */
    public static function checkUserData($email, $password)
    {
        $db = Db::getDb();

        $sql = 'SELECT id FROM user WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email);
        $result->bindParam(':password', $password);
        $result->execute();

        $userId = $result->fetch();
        if ($userId) {
            return $userId;
        }

        return false;
    }

    /**
     * @param $userId
     */
    public static function auth($userId)
    {
        session_start();
        $_SESSION['user'] = $userId;
    }
}