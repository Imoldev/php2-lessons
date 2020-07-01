<?php


class View implements \Countable, \Iterator
{
    use PropsAccessControlTrait;


    public function display(string $template)
    {
        include $template;
    }

    public function render(string $template) {
        ob_start();
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function rewind()
    {
        reset($this->data);
    }

    public function current()
    {
       return current($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function valid()
    {
       return !is_null(key($this->data));
    }

    public function count()
    {
        return count($this->data);
    }

}