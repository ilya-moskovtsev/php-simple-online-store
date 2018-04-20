<?php

class Product
{
    const DEFAULT_LIMIT = 10;

    public static function getLatestProducts($limit = self::DEFAULT_LIMIT)
    {
        $limit = intval($limit);

        $db = Db::getDb();

        $productList = array();

        $result = $db->query('SELECT id, name, price, is_new FROM product '
            . 'WHERE status = "1" '
            . 'ORDER BY id DESC '
            . 'LIMIT ' . $limit);

        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['price'] = $row['price'];
            $productList[$i]['is_new'] = $row['is_new'];
            $i++;
        }

        return $productList;
    }

    public static function getProductListByCategory($categoryId = false)
    {
        if ($categoryId) {

            $db = Db::getDb();

            $productList = array();

            $result = $db->query('SELECT id, name, price, is_new FROM product '
                . "WHERE status = '1' AND category_id = '{$categoryId}'"
                . 'ORDER BY id DESC '
                . 'LIMIT ' . self::DEFAULT_LIMIT);

            $i = 0;
            while ($row = $result->fetch()) {
                $productList[$i]['id'] = $row['id'];
                $productList[$i]['name'] = $row['name'];
                $productList[$i]['price'] = $row['price'];
                $productList[$i]['is_new'] = $row['is_new'];
                $i++;
            }

            return $productList;
        }
    }

    public static function getProductById($productId)
    {
        $productId = intval($productId);

        if ($productId) {

            $db = Db::getDb();

            $result = $db->query('SELECT * FROM product '
                . "WHERE id = '{$productId}'");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }
}