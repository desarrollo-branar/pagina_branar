<?php

namespace Branar\Blog\model;

use Branar\Blog\includes\Connection;
use PDO;

class CodeVerifyUser{
    public array $message = [
        'response' => false,
        'message' => '',
        'color' => '',
        'content' => ''
    ];

    public function setCodeVerifyUser(
        int $code, 
        int $user_id, 
        int $time_expire, 
        $created_at, 
        $date_expire
    ){
        $db = new Connection();
        $query = $db->connect()->prepare('INSERT INTO verify_email_account(code, user_id, expires_in, create_at, expiry_date) VALUES(:code, :user_id, :expires_in, :create_at, :expiry_date)');
        $query->execute([
            'code' => $code,
            'user_id' => $user_id,
            'expires_in' => $time_expire,
            'create_at' => $created_at,
            'expiry_date' => $date_expire
        ]);

        $result = $query;

        $this->message['response'] = true;
        $this->message['message'] = 'Codigo de verificacion generado con exito';
        $this->message['color'] = 'success';
        $this->message['content'] = $result;

        return $this->message;
    }

    public function getCodeByCode(int $code) {
        $db = new Connection();
        $query = $db->connect()->prepare('SELECT * FROM verify_email_account WHERE code = :code');
        $query->execute(['code' => $code]);
        $result = $query->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function updateCodeVerification(
        int $code, 
        int $user_id, 
        int $time_expire, 
        string $create_at, 
        string $date_expire
    ){
        $db = new Connection();
        $query = $db->connect()->prepare("UPDATE verify_email_account 
        SET code = :code, 
        expires_in = :expires_in, 
        create_at = :create_at, 
        expiry_date = :expiry_date 
        WHERE user_id = :user_id");
        $result = $query->execute([
            'code' => $code, 
            'expires_in' => $time_expire, 
            'create_at' => $create_at, 
            'expiry_date' => $date_expire, 
            'user_id' => $user_id
        ]);
        $result = $query;

        $message =[];
        if($result){
            $message['response'] = true;
            $message['message'] = 'todo bien';
            $message['content'] = $result;
            return $message;
        }else{
            $message['response'] = false;
            $message['message'] = 'todo mal';
            $message['content'] = $result;
            return $message;
        }
    }

    public static function generar_codigo_verificacion()
    {
        $codigo = mt_rand(0, 9999); // Generamos un número aleatorio entre 0 y 9999
    
        // Añadimos ceros a la izquierda si el número tiene menos de 4 dígitos
        $codigo = str_pad($codigo, 4, '0', STR_PAD_LEFT);
        
        return $codigo;
    }
}