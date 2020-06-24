<?php

abstract class Model
{

    protected const TABLE = '';

    public int $id;

    protected static $db = null;

    public static function findAll(): array
    {
        $db = self::getDb();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    public static function findById($id)
    {
        $params = [
            'id'=>$id
        ];
        $db = self::getDb();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = :id';
        $result = $db->query($sql, static::class, $params);
        if (empty($result)) {
            return false;
        }
        return $result[0];
    }

    public static function findLast (int $numberItems, int $page) {
        $offset = $numberItems * ($page - 1);
        $db = self::getDb();
        $sql = 'SELECT * FROM ' . static::TABLE . ' ORDER BY date DESC ' .
            ' LIMIT ' . $numberItems . ' OFFSET ' . $offset ;
        return $db->query($sql, static::class);
    }

    protected static function getDb(): Db
    {
        if (is_null(self::$db)) {
            self::$db = new \Db();
        }
        return self::$db;
    }

}
