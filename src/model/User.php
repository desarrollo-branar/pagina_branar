<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class User extends Connection{
    public function __construct(
        protected string $username, 
        public string $first_name,
        public string $last_name,
        protected string $email
    )
    {
        parent::__construct();
    }

    protected function getUsername() {
        return $this->username;
    }

    protected function getEmail() {
        return $this->email;
    }

    protected function getFistName(){
        return $this->first_name;
    }

    protected function getLastName(){
        return $this->last_name;
    }

    public static function getAll(){
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM users');
        return $result = $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser(
        string $status, 
        int $role, 
        string $password
    ){
        $query = $this->connect()->prepare('INSERT INTO users(username, first_name, last_name ,email, status, role_id, password) VALUES(:username, :first_name, :last_name, :email, :status, :role_id, :password)');
        $query->execute([
            'username' => $this->getUsername(),
            'email' => $this->getEmail(),
            'first_name' => $this->getFistName(),
            'last_name' => $this->getLastName(),
            'status' => $status,
            'role_id' => $role,
            'password' => $password
        ]);
        $result = $query;

        return $result;
    }

    public function updateUserById(
        string $status, 
        int $role, 
        string $password,
        int $id,
        $updated_at
    ){
        $query = $this->connect()->prepare('UPDATE users SET username = :username, first_name = :first_name, last_name = :last_name, email = :email, status = :status, role_id = :role_id, password = :password, updated_at = :updated_at WHERE id = :id');
        $query->execute([
            'username' => $this->getUsername(),
            'first_name' => $this->getFistName(),
            'last_name' => $this->getLastName(),
            'email' => $this->getEmail(),
            'status' => $status,
            'role_id' => $role,
            'password' => $password,
            'updated_at' => $updated_at,
            'id' => $id
        ]);
        $result = $query;

        return $result;
    }
}