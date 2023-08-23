<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Label;

$id = $params['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($id)) {
    $label_id = Navegation::validateInput($id);
    $label_name = Navegation::validateInput($_POST['label_name']);
    $color_name = Navegation::validateInput($_POST['color_name']);

    $label_name = strtolower($label_name);
    $color_name = strtolower($color_name);

    $label = new Label($label_name, $color_name);

    $update_label = $label->updateLabel($id);

    if($update_label) {
        $_SESSION['message'] = "La etiqueta {$label_name}, fue actualizada exitosamente";
        $_SESSION['message_type'] = 'success';
        header('Location: ../blog/');
    }else{
        $_SESSION['message'] = "Lo sentimos hubo un error al actualizar la etiqueta";
        $_SESSION['message_type'] = 'danger';
        header('Location: ../blog/');
    }

}