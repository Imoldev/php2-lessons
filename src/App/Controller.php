<?php


abstract class Controller
{
    /**
     * @var View
     */
    protected View $view;

    public function __invoke()
    {
        if (!$this->access()) {
            exit('Доступ закрыт');
        }
        $this->action();
    }

    abstract protected function action();

    public function __construct()
    {
        $this->view = new View();
    }

    protected function access(): bool
    {
        return true;
    }

}