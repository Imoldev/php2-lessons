<?php
require_once __DIR__ . '/../../Db.php';
require_once __DIR__ . '/../../App/Config.php';
require_once __DIR__ . '/../../Model.php';
require_once __DIR__ . '/../../Models/Article.php';
require_once __DIR__ . '/../../Models/Author.php';

use Models\Article;

// ожидаем коллекцию Article с 2 элементами начиная с 3-го (3,4)
$data = Article::findLast(2, 2);
echo '<pre>';
var_dump($data);
echo '</pre>';


$article = Article::findById(3);
// ожидаем Author
$author = $article->author;
echo '<pre>';
var_dump($author);
echo '</pre>';

// ожидаем true
var_dump(isset($article->author));
