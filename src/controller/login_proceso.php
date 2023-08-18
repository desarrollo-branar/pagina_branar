<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\User;

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = Navegation::validateInput($_POST['email']);
    $password = Navegation::validateInput($_POST['password']);

    $login = User::login($email, $password);

    // Validamos que encontramos al usuario
    if ($login['response'] == true) {

        $checkStatus = User::checkStatusUser($login);
        
        // Validamos que esta activo
        if ($checkStatus['response'] == true) {
            if ($checkStatus['content']['role_id'] == 1) {
                $_SESSION['user_data'] = [
                    'username' => $checkStatus['content']['username'],
                    'first_name' => $checkStatus['content']['first_name'],
                    'last_name' => $checkStatus['content']['last_name'],
                    'email' => $checkStatus['content']['email'],
                    'status' => $checkStatus['content']['status'],
                    'role' => $checkStatus['content']['role_id']
                ];
                header('Location: ../../admin_blog/');
            }else{
                $_SESSION['user_data'] = [
                    'username' => $checkStatus['content']['username'],
                    'first_name' => $checkStatus['content']['first_name'],
                    'last_name' => $checkStatus['content']['last_name'],
                    'email' => $checkStatus['content']['email'],
                    'status' => $checkStatus['content']['status'],
                    'role' => $checkStatus['content']['role_id']
                ];
                header('Location: ../../admin_blog/');
            }
        }else{
            dd($checkStatus);
        }
    }else{
        dd($login);
    }

}else{
    echo 'no es post';
}