<?php
require __DIR__ . '/autoload.php';

use Models\Article;

$view = new View();
$view->articles = Article::findAll();
$view->forward = 'save';

$view->display(__DIR__ . '/../templates/form.tpl.php');
$view->display(__DIR__ . '/../templates/list.tpl.php');

