<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class Author extends User{

    public function __construct(
        protected string $username, 
        public string $first_name,
        public string $last_name,
        protected string $email
    ){
        parent::__construct($username, $first_name, $last_name, $email);
    }

    public static function getAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM authors');
        return $result = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createAuthor(
        int $user_id, 
        string $specialization, 
        string $picture
    ){
        $query = $this->connect()->prepare('INSERT INTO authors(user_id, specialization, picture) VALUES(:user_id, :specialization, :picture)');
        $query->execute([
            'user_id' => $user_id,
            'specialization' => $specialization,
            'picture' => $picture
        ]);
        $result = $query;

        return $result;
    }

    public function updateAuthor(
        string $specialization,
        $picture,
        $updated_at,
        int $id
    ){
        $query = $this->connect()->prepare('UPDATE authors SET specialization = :specialization, picture = :picture, updated_at = :updated_at WHERE id = :id');
        $query->execute([
            'specialization' => $specialization,
            'picture' => $picture,
            'updated_at' => $updated_at,
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }

    public function getAuthorById(int $id){
        $query = $this->connect()->prepare('SELECT * FROM authors WHERE id = :id');
        $query->execute(['id' => $id]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function createPost(){
        
    }
}
