<?php
require __DIR__ . '/autoload.php';

use Models\Article;

$article = Article::findById($id);
$article->delete();
header ('Location: /admin');
