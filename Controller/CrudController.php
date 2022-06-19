<?php

namespace App\Controller;

use \PDO;

abstract class CrudController
{
    protected $pdo;
    protected $table = null;
    protected $class = null;

    public function __construct(PDO $pdo){
        try {
            if($this->table === null) {
                throw new \Exception('La table '. get_class($this). 'n\'a pas de propriété \$table');
            }
            if($this->class === null) {
                throw new \Exception('La classe '. get_class($this). 'n\'a pas de propriété \$class');
            }
        } catch (\Exception $e)
        {
            $error = $e->getMessage();
        }
        $this->pdo = $pdo;
    }

    public function findById(int $id)
    {
        $query = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->class);
        $result = $query->fetch();
        return $result;
    }

    public function findAll(){
        $query = $this->pdo->prepare('SELECT * FROM ' . $this->table);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}