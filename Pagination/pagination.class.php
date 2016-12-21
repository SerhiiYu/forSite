<?php

class Pagination
{
    public $buttons = array();

    public function __construct(Array $options = array('itemsCount' => 257, 'itemsPerPage' => 10, 'currentPage' => 1))
    {
        extract($options);


        if (!$currentPage) {
            return;
        }


        $pagesCount = ceil($itemsCount / $itemsPerPage);

        if ($pagesCount == 1) {
            return;
        }


        if ($currentPage > $pagesCount) {
            $currentPage = $pagesCount;
        }

        $this->buttons[] = new Button($currentPage - 1, $currentPage > 1, 'Назад');

        for ($i = 1; $i <= $pagesCount; $i++) {
            $active = $currentPage != $i;
            $this->buttons[] = new Button($i, $active);
        }

        $this->buttons[] = new Button($currentPage + 1, $currentPage < $pagesCount, 'Далее');
    }
}