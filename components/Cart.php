<?php

class Cart
{
    public static function addProduct($id)
    {
        $id = intval($id);

        $productsInCart = array();

        if (isset($_SESSION['products'])) {
            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {
            $productsInCart[$id]++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

    public static function countItems()
    {
        $count = 0;
        if (isset($_SESSION['products'])) {
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count += $quantity;
            }
        } else {
            $count = 0;
        }
        return $count;
    }
}