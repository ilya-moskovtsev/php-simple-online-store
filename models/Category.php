<?php

class Category
{
    /**
     * Returns an array of categories.
     * @return array
     */
    public static function getCategoryList()
    {
        $db = Db::getDb();

        $categoryList = array();

        $result = $db->query('SELECT id, name FROM category '
            . 'ORDER BY sort_order ASC');

        $i = 0;
        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }

        return $categoryList;
    }
}