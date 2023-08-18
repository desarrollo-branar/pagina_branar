<?php

namespace Branar\Blog\model;
use Branar\Blog\includes\Connection;
use PDO;

class User extends Connection{
    public array $message = [
        'response' => false,
        'message' => '',
        'color' => '',
        'content' => ''
    ];

    public function __construct(
        protected string $username, 
        public string $first_name,
        public string $last_name,
        protected string $email
    )
    {
        parent::__construct();
    }

    protected function getUsername(): string {
        return $this->username;
    }

    protected function getEmail(): string {
        return $this->email;
    }

    protected function getFistName(): string {
        return $this->first_name;
    }

    protected function getLastName(): string {
        return $this->last_name;
    }

    public static function getAll(): array {
        $db = new Connection();
        $query = $db->connect()->query('SELECT * FROM users');
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
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

    public static function login(string $mail, string $password): array {
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM users WHERE email = :email && password = :password');
        $query->execute([
            'email' => $mail,
            'password' => $password
        ]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result) {

            $message['response'] = true;
            $message['message'] = 'Ususario encontrado';
            $message['color'] = 'success';
            $message['content'] = $result;
            return $message;
            
        }else{
            $message['response'] = false;
            $message['message'] = 'Lo sentimos su usario y/o contrasenia son incorrectos';
            $message['color'] = 'danger';
            $message['content'] = $result;
            return $message;
        }
    }

    public static function checkStatusUser(array $value): array {
        if ($value['content']['status'] == 'disabled') {
            $message['response'] = false;
            $message['message'] = 'Lo sentimos su usuario se encuentra deshabilitado';
            $message['color'] = 'warning';
            $message['content'] = $value['content'];
            return $message;
        }else{
            $message['response'] = true;
            $message['message'] = "Bienvenido {$value['content']['username']}";
            $message['color'] = 'success';
            $message['content'] = $value['content'];
            return $message;
        }
    }
}