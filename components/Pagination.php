<?php

/**
 * Class Pagination. Generates pagination.
 */
class Pagination
{
    /**
     * @var int max number of pagination links on a page
     */
    private $max = 10;

    /**
     * @var string page number prefix
     */
    private $index = 'page';

    /**
     * @var int current page number
     */
    private $current_page;

    /**
     * @var int total number of items
     */
    private $total;

    /**
     * @var int limit number of items per page
     */
    private $limit;

    /**
     * Pagination constructor.
     * @param int $total total number of items
     * @param int $currentPage current page number
     * @param int $limit limit number of items per page
     * @param string $index page number prefix
     */
    public function __construct($total, $currentPage, $limit, $index)
    {
        # Set total number of items
        $this->total = $total;

        # Set limit number of items per page
        $this->limit = $limit;

        # Set page number prefix
        $this->index = $index;

        # Set total number of pages
        $this->amount = $this->amount();
        
        # Set current page
        $this->setCurrentPage($currentPage);
    }

    /**
     * @return string HTML with pagination links
     */
    public function get()
    {
        $links = null;

        # Получаем ограничения для цикла
        $limits = $this->limits();
        
        $html = '<ul class="pagination">';
        # Генерируем ссылки
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            # Если текущая это текущая страница, ссылки нет и добавляется класс active
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="#">' . $page . '</a></li>';
            } else {
                # Иначе генерируем ссылку
                $links .= $this->generateHtml($page);
            }
        }

        # Если ссылки создались
        if (!is_null($links)) {
            # Если текущая страница не первая
            if ($this->current_page > 1)
            # Создаём ссылку "На первую"
                $links = $this->generateHtml(1, '&lt;') . $links;

            # Если текущая страница не первая
            if ($this->current_page < $this->amount)
            # Создаём ссылку "На последнюю"
                $links .= $this->generateHtml($this->amount, '&gt;');
        }

        $html .= $links . '</ul>';

        # Возвращаем html
        return $html;
    }

    /**
     * Для генерации HTML-кода ссылки
     * @param integer $page - номер страницы
     * 
     * @return
     */
    private function generateHtml($page, $text = null)
    {
        # Если текст ссылки не указан
        if (!$text)
        # Указываем, что текст - цифра страницы
            $text = $page;

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        # Формируем HTML код ссылки и возвращаем
        return
                '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';
    }

    /**
     *  Для получения, откуда стартовать
     * 
     * @return массив с началом и концом отсчёта
     */
    private function limits()
    {
        # Вычисляем ссылки слева (чтобы активная ссылка была посередине)
        $left = $this->current_page - round($this->max / 2);
        
        # Вычисляем начало отсчёта
        $start = $left > 0 ? $left : 1;

        # Если впереди есть как минимум $this->max страниц
        if ($start + $this->max <= $this->amount) {
        # Назначаем конец цикла вперёд на $this->max страниц или просто на минимум
            $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
            # Конец - общее количество страниц
            $end = $this->amount;

            # Начало - минус $this->max от конца
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }

        # Возвращаем
        return
                array($start, $end);
    }

    /**
     * Set current page
     * @param int $currentPage current page number
     */
    private function setCurrentPage($currentPage)
    {
        $this->current_page = $currentPage;

        if ($this->current_page > 0) {
            if ($this->current_page > $this->amount)
                $this->current_page = $this->amount;
        } else
            $this->current_page = 1;
    }

    /**
     * @return float total number of pages
     */
    private function amount()
    {
        # Divide total number of items by limit number of items per page, round up and return
        return ceil($this->total / $this->limit);
    }

}
