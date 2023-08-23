<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Category;

$id = $params['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($id)) {
    $category_id = Navegation::validateInput($id);
    $category_name = Navegation::validateInput($_POST['category_name']);

    $category_name = strtolower($category_name);

    $category = new Category($category_name);
    $create_category = $category->updateCategoryById($category_id);

    if($create_category) {
        $_SESSION['message'] = "Categoria actualizada con exito";
        $_SESSION['message_type'] = 'success';
        header('Location: ../blog/');
    }else{
        $_SESSION['message'] = "Lo sentimos hubo un error al actualzar la categoria";
        $_SESSION['message_type'] = 'danger';
        header('Location: ../blog/');
    }

}