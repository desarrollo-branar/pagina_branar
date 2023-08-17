<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Role extends Connection{

    public function __construct(protected string $name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }
    
    public function createRole(){
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO roles(name) VALUES(:name)');
        $query->execute(['name' => $this->getName()]);
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

    public static function getAll(): array{
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM roles');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

}