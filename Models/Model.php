<?php

namespace Models;

class Model
{
    protected static \PDO $pdo;
    protected string $table;

    public function __construct()
    {
        try{
            static::$pdo = new \PDO('mysql:dbname=test_mvc;host=127.0.0.1', 'root', 'root', [
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        } catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

    public function all(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");
        return $statement->fetchAll();
    }

    protected function getPDO(): \PDO
    {
        return static::$pdo;
    }
}