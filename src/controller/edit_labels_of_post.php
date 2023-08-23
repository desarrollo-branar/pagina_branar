<?php

use Branar\Blog\model\Label;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Obtén el ID del post y las labels del formulario
    $post_id = $_POST['post_id'];
    $selectedLabels = $_POST['labels'];
    // Inicializa la variable para el seguimiento de errores
    $success = true;

// Verifica si el post tiene labels antes de intentar eliminar relaciones
    if (Label::getPostLabelCount($post_id) > 0) {
        // Elimina las relaciones existentes para el post
        if (!Label::deletePostLabels($post_id)) {
            $success = false;
        }
    }

    // Crea nuevas relaciones con las labels seleccionadas
    foreach ($selectedLabels as $label_id) {
        if (!Label::createPostLabel($post_id, $label_id)) {
            $success = false;
        }else{
            $success = true;
        }
    }

    if ($success) {
        $_SESSION['message'] = "Se actualizaron las etiquetas correctamente";
        $_SESSION['message_type'] = 'success';
        header('Location: ../blog/');
    } else {
        $_SESSION['message'] = "Lo sentimos hubo un error al actualizar los labels";
        $_SESSION['message_type'] = 'danger';
        header('Location: ../blog/');
    }

}

