<?php

class UserController
{
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        $isRegistered = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (User::checkEmail($email)) {
                if (User::checkEmailExists($email)) {
                    $errors[] = 'Такой email уже используется';
                }
            } else {
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {
                $isRegistered = User::register($name, $email, $password);
            }
        }
        require_once(ROOT . '/views/user/register.php');

        return true;
    }
}