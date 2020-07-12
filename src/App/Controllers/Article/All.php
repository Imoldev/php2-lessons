<?php


namespace Controllers\Article;

use Models\Article;

class All extends \Controller
{
    const TEMPLATES_PATH = __DIR__ . '/../../templates/';

    protected function action()
    {
        $this->view->articles = Article::findAll();

        $this->view->display(self::TEMPLATES_PATH . 'news-list.tpl.php');
    }


}