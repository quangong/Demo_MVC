<?php

namespace App\App\Database;

use \PDO;

class QueryBuilder
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function all(string $table, string $fetchClass = null)
    {
        $query = $this->db->prepare("select * from {$table};");
        $query->execute();

        if ($fetchClass) {
            return $query->fetchAll(PDO::FETCH_CLASS, $fetchClass);
        }

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert(string $table, array $parameters)
    {
        $sql = sprintf(
            'INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );
        $query = $this->db->prepare($sql);

        return $query->execute($parameters);
    }

    public function delete(string $table, $id)
    {
        $sql = 'DELETE FROM ' . $table . ' WHERE id=' . $id;
        $query = $this->db->prepare($sql);

        return $query->execute();
    }
}
