<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Author;
use Branar\Blog\model\Post;
use Branar\Blog\model\ImageUploader;

$id = $params['id'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($id)) {
    $title = Navegation::validateInput($_POST['title']);
    $description = Navegation::validateInput($_POST['description']);
    $category = Navegation::validateInput($_POST['category']);
    $status = Navegation::validateInput($_POST['status']);
    echo $status; echo '<br>';
    date_default_timezone_set("America/Caracas");
    $date = new DateTime();

    $post = new Post($title, $description);
    $author = new Author(
        $_SESSION['user_data']['username'],
        $_SESSION['user_data']['first_name'],
        $_SESSION['user_data']['last_name'],
        $_SESSION['user_data']['email']
    );

    $data_author = $author->getAuthorByUserId($_SESSION['user_data']['id']);
    
    echo 'fuera del if';
    if (isset($_FILES["file"]) && $_FILES["file"]['size'] > 0) {
        $image = new ImageUploader();
        echo 'moviendo imagen';
        $uploader = $image->uploadImage($_FILES["file"]);
        
        if ($uploader['response'] == true) {
            $update_post = $post->updatePost($data_author['id'], $category, $_FILES["file"]['name'], $status, $date->format("Y-m-d H:i:s"), $id);

            if ($update_post['response'] == true) {
                $_SESSION['message'] = "{$post->message['message']}";
                $_SESSION['message_type'] = 'success';
                header('Location: ../blog/');
            }else{
                $_SESSION['message'] = "{$post->message['message']}";
                $_SESSION['message_type'] = 'danger';
                header('Location: ../blog/');
            }
        }else{
            $_SESSION['message'] = "{$uploader['message']}";
            $_SESSION['message_type'] = 'warning';
            header('Location: ../blog/');
        }

    }else{
        $update_post = $post->updatePost($data_author['id'], $category,'',$status, $date->format("Y-m-d H:i:s"), $id);

        if ($update_post['response'] == true) {
            $_SESSION['message'] = "{$post->message['message']}";
            $_SESSION['message_type'] = 'success';
            header('Location: ../blog/');
        }else{
            $_SESSION['message'] = "{$post->message['message']}";
            $_SESSION['message_type'] = 'danger';
            header('Location: ../blog/');
        }
    }
}