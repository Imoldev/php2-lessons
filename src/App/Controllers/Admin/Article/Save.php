<?php


namespace Controllers\Admin\Article;


use Models\Article;

class Save extends \Controller
{
    const TEMPLATES_PATH = __DIR__ . '/../../../templates/admin/';

    protected function action()
    {
        $article = $this->getArticle();
        if ($article === false) {
            //todo здесь должен появиться выброс исключения
            exit('невозможно выполнить операцию');
        }
        $article->title = $_POST['title'];
        $article->preview = $_POST['preview'];
        $article->content = $_POST['content'];

        $article->save();
        $this->forward();
    }

    /**
     * @return Article|bool
     */
    protected function getArticle()
    {
        $id = $_POST['id'];

        if ($id === '') {
            return new Article();
        }

        $id = (int)$id;
        return Article::findById($id);
    }

    protected function forward()
    {
        header('Location: /admin/article/all');
    }
}