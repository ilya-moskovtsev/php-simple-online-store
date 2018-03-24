<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 23/02/2018
 * Time: 20:30
 */

class Db
{
    /**
     * @return PDO
     */
    public static function getDb()
    {
        $params = include(ROOT . '/config/db_params.php');

        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};port={$params['port']};charset={$params['charset']}";
        $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

        $db = new PDO($dsn, $params['user'], $params['password'], $opt);

        return $db;
    }
}