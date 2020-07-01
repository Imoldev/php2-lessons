<?php
require __DIR__ . '/autoload.php';

use Models\Article;

$article = Article::findById($id);

$article->title = $_POST['title'];
$article->preview = $_POST['preview'];
$article->content = $_POST['content'];

$article->save();
header ('Location: /admin/?action=edit&id=' . $article->id);
exit();