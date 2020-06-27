<?php
require __DIR__ . '/autoload.php';

use Models\Article;

$forward = 'update';
$article = Article::findById($id);

include __DIR__ . '/../templates/form.tpl.php';
include __DIR__ . '/../templates/article.tpl.php';