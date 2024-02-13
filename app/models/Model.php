<?php
namespace app\models;

use app\config\Connection;
use Ramsey\Uuid\Uuid;

abstract class Model 
{
    private string $fields = "*";
    private string $filters = "";


    public function setFields(string $fields) {
        $this->fields = $fields;
    }

    public function setFilters(Filters $filters) {
        $this->filters = $filters;
    }

    public function fetchAll() {

        try {
            $sql = "SELECT {$this->fields} FROM {$this->table} {$this->filters}";
            
            $connection = new Connection();
            $pdo = $connection->getPdo();

            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function insert(array $data) {

        try {
            $data["id"] = Uuid::uuid4()->toString();

            $sql = "INSERT INTO {$this->table}(".implode(',', array_keys($data)).") VALUE (:".implode(",:", array_keys($data)).")";
            
            $connection = new Connection();
            $pdo = $connection->getPdo();

            $stmt = $pdo->prepare($sql);
            
            return $stmt->execute($data);
        } catch (\PDOException $e) {
            dd($e->getMessage());
        }
    }

    
    public function getByOne() {

    }
}