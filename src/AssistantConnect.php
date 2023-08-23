<?php

namespace src;

class AssistantConnect
{
    public $dataBase;

    public function __construct(string $dbName, string $host, string $login, string $password)
    {
        try {
            $this->dataBase = new \PDO("mysql:dbname=$dbName;host=$host", $login, $password);
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
    }
}

?>