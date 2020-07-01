<?php
declare(strict_types=1);

require_once __DIR__ . '/autoload.php';

use Models\Article;

$articleId = (int)$_GET['id'];

$article = Article::findById($articleId);

if( false === $article) {
    header("HTTP/1.0 404 Not Found");
    include __DIR__ . '/templates/404.tpl.php';
    exit();
}

$view = new View();
$view->article = $article;

$view->display( __DIR__ . '/templates/article.tpl.php');



