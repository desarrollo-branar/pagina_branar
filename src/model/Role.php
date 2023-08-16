<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Role extends Connection{

    public function __construct(protected string $name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    
    public static function createRole(string $name){
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO roles(name) VALUES(:name)');
        $query->execute(['name' => $name]);
        $result = $query;
    
        return $result;
    }
    

    public function updateRolebyId(int $id){
        $query = $this->connect()->prepare('UPDATE roles SET name = :name WHERE id = :id');
        $query->execute([
            'name' => $this->getName(),
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }

    public function getAll(){
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM roles');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}