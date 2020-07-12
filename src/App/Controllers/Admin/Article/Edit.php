<?php


namespace Controllers\Admin\Article;


use Models\Article;

class Edit extends \Controller
{
    const TEMPLATES_PATH = __DIR__ . '/../../../templates/admin/';

    protected function action()
    {
        $id = $this->getId();
        $article = Article::findById($id);
        if ($article === false) {
            // todo здесь должен появитсья выброс исключения
            exit('объект не найден');
        }

        $this->view->article = $article;

        $this->view->display(self::TEMPLATES_PATH . 'form.tpl.php');
        $this->view->display(self::TEMPLATES_PATH . 'article.tpl.php');
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
}