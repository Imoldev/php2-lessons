<?php


namespace Controllers\Admin\Article;


use Models\Article;

class Delete extends \Controller
{

    protected function action()
    {
        $id = $this->getId();
        $article = Article::findById($id);
        if ($article === false) {
            // todo здесь должен появитсья выброс исключения
            exit('объект не найден');
        }
        $article->delete();
        $this->forward();
    }

    protected function getId(): int
    {
        $id = $_REQUEST['id'] ?? null;
        if ($id === null) {
            // todo здесь должен появитсья выброс исключения
            exit('невозможно выполнить операцию');
        }
        return (int)$id;
    }

    protected function forward()
    {
        header('Location: /admin/article/all');
    }
}