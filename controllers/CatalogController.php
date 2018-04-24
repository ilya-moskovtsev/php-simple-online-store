<?php

class CatalogController
{
    public function actionIndex($currentPage = 1)
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts($currentPage);

        $total = Product::getProductCount();

        $pagination = new Pagination($total, $currentPage, Product::DEFAULT_LIMIT, 'page-');

        require_once(ROOT . '/views/catalog/index.php');

        return true;
    }

    public function actionCategory($categoryId, $currentPage = 1)
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductListByCategory($categoryId, $currentPage);

        $total = Product::getProductCountInCategory($categoryId);

        $pagination = new Pagination($total, $currentPage, Product::DEFAULT_LIMIT, 'page-');

        require_once(ROOT . '/views/catalog/category.php');

        return true;
    }
}