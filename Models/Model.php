<?php

namespace Models;

class Model
{
    protected static \PDO $pdo;
    protected string $table;

    //Initialise toute la partie "connexion a la BDD" (ne pas toucher)
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

    //Fonction exemple resortant toutes les données d'une BDD
    public function all(): array
    {
        $statement = $this->getPDO()->query("SELECT * FROM {$this->table}");
        return $statement->fetchAll();
    }

    //Fonction exemple comprenant un argument et recherchant des informations dans la BDD a partir de celui-ci
    public function selectFromWhereOneArgument(string $column, int|string $value): array
    {
        $statement = $this->getPDO()->prepare('SELECT * FROM {$this->table} WHERE {$this->column} = ?');
        $statement->execute([$value]);
        return $statement->fetchAll();
    }

    //Permet d'initialiser PDO pour accéder aux BDD (ne pas toucher)
    protected function getPDO(): \PDO
    {
        return static::$pdo;
    }
}