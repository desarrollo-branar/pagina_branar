<?php

namespace Branar\Blog\model;
session_start();
class Navegation {
    
    // Obtener la URL actual

    public static function getCurrentUrl()
    {
        return "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    // Generar menú de navegación

    public static function generateNavigationMenu($currentPage)
    {
        $pages = array(
            "Inicio" => "index.php",
            "Acerca De" => "about.php",
            "Contacto" => "contact.php"
        );

        $menuHtml = "<ul>";
        foreach($pages as $title => $url) {
            $activeClass = $url == $currentPage ? "active" : "";
            $menuHtml .= "<li><a href='$url' class='activeClass'>$title</a></li>";
        }

        $menuHtml .= "</ul>";
        return $menuHtml;
    }

    // Controlar el estado de la navegacion

    public static function goBack() {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    // Gestionar permisos de acceso
    public static function checkPermission($IdUsuarioPermitido)
    {
        
        $vistas = [
            1 => 'admin/',
            2 => 'estandar/',
            3 => 'empresa/'
        ]; 
        // session_start();

        if (!isset($_SESSION['s_usuario'])) {
            header("Location: ../index");
            exit();
        }

        if (is_array($IdUsuarioPermitido)){
            if (!in_array($_SESSION['tipo_usuario'], $IdUsuarioPermitido)){
                header("location: ../".$vistas[$_SESSION['tipo_usuario']]);
                die();
            }
        }
    }

    // Almacenar información de la sesión
    public static function setSessionData($key, $value)
    {
        session_start();
        $_SESSION[$key] = $value;
    }

    public static function getSessionData($key)
    {
        // Valdiar que la sesion existe
        return isset($_SESSION[$key]) ? $_SESSION[$key] : null;
    }

    // Eliminar información de la sesion
    public static function unsetSessionData($key)
    {
        session_start();
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

    
    private function simpleRoute($file, $route)
    {

        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        if($reqUri == $route){
            $params = [];
            include($file);
            exit();

        }

    }

    function add($route,$file)
    {

        $params = [];

        $paramKey = [];

        preg_match_all("/(?<={).+?(?=})/", $route, $paramMatches);

        if(empty($paramMatches[0])){
            $this->simpleRoute($file,$route);
            return;
        }

        foreach($paramMatches[0] as $key){
            $paramKey[] = $key;
        }

        if(!empty($_REQUEST['uri'])){
            $route = preg_replace("/(^\/)|(\/$)/","",$route);
            $reqUri =  preg_replace("/(^\/)|(\/$)/","",$_REQUEST['uri']);
        }else{
            $reqUri = "/";
        }

        $uri = explode("/", $route);

        $indexNum = []; 

        foreach($uri as $index => $param){
            if(preg_match("/{.*}/", $param)){
                $indexNum[] = $index;
            }
        }

        $reqUri = explode("/", $reqUri);

        foreach($indexNum as $key => $index){

            if(empty($reqUri[$index])){
                return;
            }

            $params[$paramKey[$key]] = $reqUri[$index];

            $reqUri[$index] = "{.*}";
        }

        $reqUri = implode("/",$reqUri);

        $reqUri = str_replace("/", '\\/', $reqUri);

        if(preg_match("/$reqUri/", $route))
        {
            include($file);
            exit();

        }
    }

    function notFound($file)
    {
        include($file);
        exit();
    }

}

?>