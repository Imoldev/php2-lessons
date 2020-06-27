<?php
require __DIR__ . '/autoload.php';

use Models\Article;


$newsList = Article::findAll();
$forward = 'save';
include __DIR__ . '/../templates/form.tpl.php';
include __DIR__ . '/../templates/list.tpl.php';