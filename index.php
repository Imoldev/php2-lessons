<?php
require_once __DIR__ . '/autoload.php';

use Models\Article;

$numberItems = 3;
$page = 1;

$newsList = Article::findLast($numberItems, $page);

include __DIR__ . '/templates/news-list.tpl.php';






