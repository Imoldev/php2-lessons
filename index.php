<?php
declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use Models\Article;

$numberItems = 3;
$page = 1;

$view = new View();

$view->newsList = Article::findLast($numberItems, $page);

$view->display(__DIR__ . '/templates/news-list.tpl.php');








