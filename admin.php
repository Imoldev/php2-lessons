<?php
require_once __DIR__ . '/autoload.php';

use Models\Article;

$action = $_REQUEST['action'] ?? 'index';

switch ($action) {
    case 'index':
        $newsList = Article::findAll();
        $forward = 'save';
        include __DIR__ . '/templates/admin.tpl.php';
        break;

    case 'save':
        $article = new Article();
        $article->title = trim($_POST['title']);
        $article->preview = trim($_POST['preview']);
        $article->content = trim($_POST['content']);

        $article->save();
        header ('Location: /admin.php');
        exit();
        break;

    case 'edit':
        $id = $_GET['id'];
        $forward = 'update';
        $newsList = Article::findAll();
        $article = Article::findById($id);
        include __DIR__ . '/templates/admin.tpl.php';
        break;

    case 'update':
        $id = $_POST['id'];
        $article = Article::findById($id);

        $article->title = trim($_POST['title']);
        $article->preview = trim($_POST['preview']);
        $article->content = trim($_POST['content']);

        $article->save();
        header ('Location: /admin.php');
        exit();
        break;

    case 'delete':
        $id = $_GET['id'];
        $article = Article::findById($id);
        $article->delete();
        header ('Location: /admin.php');
        exit();
        break;

    case 'clear':
        header ('Location: /admin.php');
        exit();
        break;

    default:
        header("HTTP/1.0 404 Not Found");
        include __DIR__ . '/templates/404.tpl.php';
        exit();
}