<?php

class Db
{

    protected PDO $dbh;

    public function __construct()
    {
        $this->dbh = new \PDO('pgsql:host=localhost;dbname=profit', 'profit', 'profit');
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
        return $sth->execute($params);
    }

}
