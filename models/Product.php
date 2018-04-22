<?php

class Product
{
    const DEFAULT_LIMIT = 3;

    public static function getLatestProducts($currentPage = 1)
    {
        $currentPage = intval($currentPage);
        $offset = ($currentPage - 1) * self::DEFAULT_LIMIT;

        $db = Db::getDb();

        $productList = array();

        $result = $db->query('SELECT id, name, price, is_new FROM product '
            . "WHERE status = '1'"
            . 'ORDER BY id DESC '
            . 'LIMIT ' . self::DEFAULT_LIMIT
            . ' OFFSET ' . $offset);

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

    public static function getProductListByCategory($categoryId = false, $currentPage = 1)
    {
        if ($categoryId) {

            $currentPage = intval($currentPage);
            $offset = ($currentPage - 1) * self::DEFAULT_LIMIT;

            $db = Db::getDb();

            $productList = array();

            $result = $db->query('SELECT id, name, price, is_new FROM product '
                . "WHERE status = '1' AND category_id = '{$categoryId}'"
                . 'ORDER BY id DESC '
                . 'LIMIT ' . self::DEFAULT_LIMIT
                . ' OFFSET ' . $offset);

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

    public static function getProductCountInCategory($categoryId)
    {
        $db = Db::getDb();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . "WHERE status = '1' AND category_id = '{$categoryId}'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }

    public static function getProductCount()
    {
        $db = Db::getDb();

        $result = $db->query('SELECT count(id) AS count FROM product '
            . "WHERE status = '1'");
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
}