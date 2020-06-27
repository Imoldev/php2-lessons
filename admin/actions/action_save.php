<?php
require __DIR__ . '/autoload.php';

use Models\Article;

$article = new Article();
$article->title = $_POST['title'];
$article->preview = $_POST['preview'];
$article->content = $_POST['content'];

$article->save();
header ('Location: /admin');