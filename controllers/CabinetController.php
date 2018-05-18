<?php

class CabinetController
{
    public function actionIndex()
    {
        $userID = User::checkLogged();

        $user = User::getUserById($userID);

        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }

    public function actionEdit()
    {
        $userID = User::checkLogged();

        $user = User::getUserById($userID);

        $name = $user['name'];
        $password = $user['password'];

        $editSuccessful = false;

        if ($_POST['submit']) {
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }

            if ($errors == false) {
                $editSuccessful = User::edit($userID, $name, $password);
            }
        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }
}