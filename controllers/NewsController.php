<?php

class NewsController
{
    /**
     * Shows a list of news.
     * @return bool
     */
    public function actionIndex()
    {
//        echo __METHOD__;

        $newsList = News::getNewsList();

//        echo '<pre>';
//        print_r($newsList);
//        echo '</pre>';

        require_once(ROOT.'/views/news/index.php');

        return true;
    }

    /**
     * Shows one news.
     * @param $id
     * @return bool
     */
    public function actionView($id)
    {
//        echo __METHOD__;
//        echo '<br>'. $id;

        if ($id) {
            $newsItem = News::getNewsItemById($id);

//            echo '<pre>';
//            print_r($newsItem);
//            echo '</pre>';

            require_once(ROOT.'/views/news/view.php');

        }

        return true;
    }
}