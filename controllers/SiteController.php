<?php

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact()
    {
        $userEmail = '';
        $userText = '';

        $isMessageSent = false;

        if (isset($_POST['submit'])) {
            $userEmail = $_POST['email'];
            $userText = $_POST['text'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильный email';
            }

            if ($errors == false) {
                $to = 'ilya.moskovtsev@gmail.com';
                $subject = 'Subject';
                $message = "Message: {$userText} From: {$userEmail}";

                $isMessageSent = mail($to, $subject, $message);
            }
        }

        require_once(ROOT . '/views/site/contact.php');

        return true;
    }
}