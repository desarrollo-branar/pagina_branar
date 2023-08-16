<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Category extends Connection{

    public function __construct(protected string $name)
    {
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function createCategory(){
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO categories(name) VALUES(:name)');
        $query->execute(['name' => $this->getName()]);
        $result = $query;

        return $result;
    }

    public function updateCategoryById(int $id){
        $db = new Connection();
        $query = $db->connect()->prepare('UPDATE categories SET name = :name WHERE id = :id');
        $query->execute([
            'name' => $this->getName(), 
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }

    public function getAll(){
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM categories');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getById(int $id) {
        $query = $this->connect()->prepare('SELECT * FROM categories WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}