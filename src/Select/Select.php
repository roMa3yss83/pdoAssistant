<?php

namespace Src\Select;

class Select
{
    private $db;

    public function __construct(\src\AssistantConnect $db)
    {
        $this->db = $db->dataBase;
    }

    /**
     * @param string $table Таблица
     * @param array $value Поля, которые будут выводиться
     * @param array $fields Поиск по полям через ассоциативный массив
     * 
     * @return [type]
     */
    public function findAll(string $table, array $value = [], array $fields = ['*'])
    {
        if ($fields[0] == '*') {
            if (empty($value)) {
                return $this->db->query("SELECT * FROM $table")->fetchAll(\PDO::FETCH_ASSOC);
            }
        }
    }

}

?>