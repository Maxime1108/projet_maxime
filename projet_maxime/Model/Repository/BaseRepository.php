<?php

namespace Model\Repository;

use Model\Database;

class BaseRepository
{
    protected $connexion;
    protected $database;

    public function __construct()
    {
        $this->database = new Database;
        $this->connexion = $this->database->dbConnect();
    }
    public function findAll(Object $tableName)
    {
        $sql = "SELECT * FROM $tableName";

        $request = $this->connexion->query($sql);

        $result = $request->fetchAll(\PDO::FETCH_CLASS, $tableName);
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }

    public function findById(Object $tableName, int $id)
    {
        $sql = "SELECT * FROM $tableName WHERE id = :id";

        $request = $this->connexion->prepare($sql);
        $request->execute(['id' => $id]);

        $result = $request->fetchObject($tableName);
        if ($result) {
            return $result;
        } else {
            return null;
        }
    }
}
