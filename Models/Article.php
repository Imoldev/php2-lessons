<?php

namespace Models;
use Db;

class Article extends \Model
{
    protected const TABLE = 'articles';

    public string $title;

    public string $preview;

    public string $content;

    public string $date;

    public static function findLast (int $numberItems, int $page) {
        $offset = $numberItems * ($page - 1);
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY date DESC ' .
               ' LIMIT ' . $numberItems . ' OFFSET ' . $offset ;
        return $db->query($sql, static::class);
    }

}
