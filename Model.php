<?php

abstract class Model
{

    protected const TABLE = '';

    public int $id;

    /**
     * @return static[]
     */
    public static function findAll(): array
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql, static::class);
    }

    /**
     * @param $id
     * @return bool|static
     */
    public static function findById($id)
    {
        $db = Db::instance();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id = ?';
        $result = $db->query($sql, static::class, [$id]);
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

    public function save()
    {
        if (!isset($this->id)) {
            $this->insert();
            return;
        }
        $this->update();
    }

    public function delete() {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id = ' . $this->id;
        $db = Db::instance();
        $db->execute($sql);
    }

    protected function insert()
    {
        $props = get_object_vars($this);

        $columns = [];
        $binds = [];
        $data = [];
        foreach ($props as $name => $value) {
            $columns[] = $name;
            $binds[] = ':' . $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' 
        (' . implode(',', $columns) . ') 
        VALUES (' . implode(',', $binds) . ' )';

        $db = Db::instance();
        $res = $db->execute($sql, $data);
        if (true === $res) {
            $this->id = $db->lastId();
        }
    }

    protected function update() {
        $props = get_object_vars($this);

        $set = [];
        foreach ($props as $name => $value) {
            if ('id' !== $name) {
                $set[] = $name . '=:' . $name;
            }
        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(',', $set) . ' WHERE id=:id';
        $db = Db::instance();
        $db->execute($sql, $props);
    }
}
