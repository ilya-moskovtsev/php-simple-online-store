<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 08/02/2018
 * Time: 23:33
 */

//Front Controller

//1.General settings

//show errors while developing
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2.Including files
define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Router.php');

//3.Connecting to DB

//4.Calling Router
$router = new Router();
$router->run();