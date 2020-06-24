<?php

namespace Models;

class Article extends \Model
{
    protected const TABLE = 'articles';

    public string $title;

    public string $preview;

    public string $content;

    public string $date;

}
