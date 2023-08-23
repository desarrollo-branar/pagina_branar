<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Category;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = Navegation::validateInput($_POST['category_name']);
    $category_name = strtolower($category_name);

    $category = new Category($category_name);

    $create_category = $category->createCategory();

    if($create_category) {
        $_SESSION['message'] = "Su categoria {$category_name}, fue creada exitosamente";
        $_SESSION['message_type'] = 'success';
        header('Location: ../blog/');
    }else{
        $_SESSION['message'] = "Lo sentimos hubo un error al crear la categoria";
        $_SESSION['message_type'] = 'danger';
        header('Location: ../blog/');
    }

}