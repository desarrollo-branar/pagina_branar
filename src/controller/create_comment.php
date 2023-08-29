<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Comment;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comment_content = Navegation::validateInput($_POST['comment_content']);
    $post_id = Navegation::validateInput($_POST['post_id']);

    $comment = new Comment($post_id, $_SESSION['user_data']['id'], $comment_content);

    if($comment->create_comment()) {
        $_SESSION['message'] = "Comentario registrado";
        $_SESSION['message_type'] = 'success';
        header('Location: ../blog/');
    }else{
        $_SESSION['message'] = "Error a lcrear el comentario";
        $_SESSION['message_type'] = 'danger';
        header('Location: ../blog/');
    }

}