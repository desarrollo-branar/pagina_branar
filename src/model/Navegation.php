<?php
session_start();
class Navegation {
    
    // Obtener la URL actual

    public static function getCurrentUrl()
    {
        return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    // Gestionar permisos de acceso
    public static function checkPermission($IdUsuarioPermitido)
    {
        // Establecer zona horaria
        date_default_timezone_set("America/Caracas");

        if (!isset($_SESSION['id_usuario'])) {
            header("Location: ../index.php");
            exit();
        }else {
            //sino, calculamos el tiempo transcurrido
            $fechaGuardada = $_SESSION["ultimoAcceso"];
            $ahora = date("Y-m-d h:i:s");
            $tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
        
            //comparamos el tiempo transcurrido
            if($tiempo_transcurrido >= 3600) {
                //si pasaron 10 minutos o más
                session_destroy(); 
                header("Location: index.php"); 
                //sino, actualizo la fecha de la sesión
            }else {
                $_SESSION["ultimoAcceso"] = $ahora;
            }
        }
    }

    // Eliminar información de la sesion
    public static function unsetSessionData($key)
    {
        // session_start();
        unset($_SESSION[$key]);
    }

    // Validar la entrada del usuario
    public static function validateInput($input)
    {
        // Eliminar los espacios en blanco al inicio y final de una cadena
        $input = trim($input);
        // Eliminar las barras invertidas escapando de ellas
        $input = stripslashes($input);
        // convertir caracteres especiales a simplemente caracteres
        $input = htmlspecialchars($input);
        return $input;
    }

}
