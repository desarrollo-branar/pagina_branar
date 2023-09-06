<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Category extends Connection{

    public function __construct(protected string $name)
    {
        $this->name = $name;
    }

    public function getName(): string {
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

    public static function getCategoryByName(string $name){
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM categories WHERE name = :name');
        $query->execute(['name' => $name]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public static function getAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM categories ORDER BY id ASC');
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