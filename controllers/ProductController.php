<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 10/02/2018
 * Time: 21:30
 */

class ProductController
{
    public function actionView($id)
    {
        require_once(ROOT . '/views/product/view.php');

        return true;
    }
    public function actionList()
    {
        echo __METHOD__;
        return true;
    }

}