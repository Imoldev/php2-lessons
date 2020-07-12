<?php

namespace Models;

/**
 * Class Article
 *
 * @property Author|null|false $author
 */
class Article extends \Model
{
    protected const TABLE = 'articles';

    public string $title;

    public string $preview;

    public string $content;

    public string $date;

    /**
     * @var int|null
     */
    public ?int $author_id;

    public function __get($name)
    {
        if ($name !== 'author' || !isset($this->author_id)) {
            return null;
        }
        return Author::findById($this->author_id);
    }

    public function __isset($name)
    {
       if ($name !== 'author') {
           return false;
       }
       return isset($this->author_id);
    }
}
