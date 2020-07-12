<?php


namespace Controllers\Admin\Article;


use Models\Article;

class All extends \Controller
{
    const TEMPLATES_PATH = __DIR__ . '/../../../templates/admin/';

    protected function action()
    {
        $this->view->articles = Article::findAll();

        $this->view->display(self::TEMPLATES_PATH . 'form.tpl.php');
        $this->view->display(self::TEMPLATES_PATH . 'list.tpl.php');
    }

}