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
     * @param $password
     * @return bool
     */
    public static function checkPassword($password)
    {
        return strlen($password) >= 6;
    }
}