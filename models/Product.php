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
}