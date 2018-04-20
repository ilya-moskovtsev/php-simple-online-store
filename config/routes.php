<?php
/**
 * Created by PhpStorm.
 * User: ilya
 * Date: 10/02/2018
 * Time: 22:00
 */

return array(
    'product/([0-9]+)' => 'product/view/$1',
    'catalog' => 'catalog/index',
    'category/([0-9]+)' => 'catalog/category/$1',
    '' => 'site/index',
    'news/([0-9]+)' => 'news/view/$1', // NewsController::actionView
    'news' => 'news/index', // NewsController::actionIndex
    'products' => 'product/list' //ProductController::actionList
);