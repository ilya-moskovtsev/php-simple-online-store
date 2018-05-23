<?php

class CartController
{
    public function actionAddAjax($id)
    {
        echo Cart::addProduct($id);
        return true;
    }
}