<?php
require __DIR__ . '/autoload.php';

use Models\Article;

$view = new View();
$view->article = Article::findById($id);

if ( false === $view->article) {
    include __DIR__ . '/action_404.php';
    exit();
}

$view->forward = 'update';

$view->display(__DIR__ . '/../templates/form.tpl.php');
$view->display(__DIR__ . '/../templates/article.tpl.php');


