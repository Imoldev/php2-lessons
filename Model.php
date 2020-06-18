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
        $db = self::getDb();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = ?';
        $result = $db->query($sql, static::class, [$id]);
        if (empty($result)) {
            return false;
        }
        return $result[0];
    }

    protected static function getDb(): Db
    {
        if (is_null(self::$db)) {
            self::$db = new \Db();
        }
        return self::$db;
    }

}
