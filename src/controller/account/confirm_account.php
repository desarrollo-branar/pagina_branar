<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Email;
use Branar\Blog\model\CodeVerifyUser;
use Branar\Blog\model\User;

// Establecer zona horaria
date_default_timezone_set("America/Caracas");

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    $code = Navegation::validateInput($_POST['code_account']);
    
    $code_verify_user = new CodeVerifyUser();
    $result = $code_verify_user->getCodeByCode($code);

    // validar que la fecha actual coincida o este en el rango de la fecha de expiracion y a su vez que el codigo introducido coincida con el guardado
    if ( date("Y-m-d h:i:s") <= $result['expiry_date'] && $result['code'] == $code) {

        $enableUser = User::enableUser($_SESSION['id_user']);
        $user = User::getUserById($_SESSION['id_user']);


        if($enableUser) {
            $_SESSION['user_data'] = [
                'id' => $user['content']['id'],
                'username' => $user['content']['username'],
                'first_name' => $user['content']['first_name'],
                'last_name' => $user['content']['last_name'],
                'email' => $user['content']['email'],
                'status' => $user['content']['status'],
                'role' => $user['content']['role_id']
            ];
            $_SESSION['message'] = "Bienvenido al blog!!";
            $_SESSION['message_type'] = 'success';
            header('Location: ../blog/');
        }

    }else{
        echo 'ya paso el timepo';
    }

}