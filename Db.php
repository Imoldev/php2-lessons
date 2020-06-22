<?php

use App\Config;

class Db
{

    protected static $instance = null;

    protected PDO $dbh;

    public static function instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    protected function __construct()
    {
        $config = Config::instance();
        $dbData = $config->data['db'];

        $host = $dbData['host'];
        $dbname = $dbData['dbname'];
        $username = $dbData['username'];
        $password = $dbData['password'];

        $this->dbh = new \PDO('pgsql:host=' . $host . ';dbname=' . $dbname, $username, $password);
    }

    public function query($sql, $class, $params = []): array
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $class);
    }

    public function execute($query, $params = []): bool
    {
        $sth = $this->dbh->prepare($query);

        $arr = $sth->errorInfo();
        print_r($arr);

        return $sth->execute($params);
    }

    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }

}
