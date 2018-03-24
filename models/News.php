<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 22/02/2018
 * Time: 18:55
 */

class News
{
    /**
     * Returns single news item with specified id.
     * @param integer $id
     * @return array
     */
    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getDb();

            $result = $db->query('SELECT * from news WHERE id=' . $id);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $newsItem = $result->fetch();

            return $newsItem;
        }
    }

    /**
     * Returns an array of news items.
     * @return array
     */
    public static function getNewsList()
    {
        $db = Db::getDb();

        $newsList = array();

        $result = $db->query('SELECT id, h1, date, short_content '
            . 'FROM news '
            . 'ORDER BY date DESC '
            . 'LIMIT 10');

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['h1'] = $row['h1'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i++;
        }

        return $newsList;
    }
}