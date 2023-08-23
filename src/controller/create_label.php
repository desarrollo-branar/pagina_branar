<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Label;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $label_name = Navegation::validateInput($_POST['label_name']);
    $color_name = Navegation::validateInput($_POST['color_name']);
    $label_name = strtolower($label_name);
    $color_name = strtolower($color_name);

    $label = new Label($label_name, $color_name);

    $create_label = $label->createLabel();

    if($create_label) {
        $_SESSION['message'] = "La etiqueta {$label_name}, fue creada exitosamente";
        $_SESSION['message_type'] = 'success';
        header('Location: ../blog/');
    }else{
        $_SESSION['message'] = "Lo sentimos hubo un error al crear la etiqueta";
        $_SESSION['message_type'] = 'danger';
        header('Location: ../blog/');
    }

}