<?php

use Branar\Blog\model\Navegation;
use Branar\Blog\model\Author;
use Branar\Blog\model\Post;
use Branar\Blog\model\ImageUploader;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = Navegation::validateInput($_POST['title']);
    $description = Navegation::validateInput($_POST['description']);
    $category_name = Navegation::validateInput($_POST['category']);
    $picture_image = '';

    $post = new Post($title, $description);
    $author = new Author(
        $_SESSION['user_data']['username'],
        $_SESSION['user_data']['first_name'],
        $_SESSION['user_data']['last_name'],
        $_SESSION['user_data']['email']
    );

    if (isset($_FILES["file"]) && $_FILES["file"]['size'] > 0) {
        $image = new ImageUploader();
        $uploader = $image->uploadImage($_FILES["file"]);

        if ($uploader['response'] == true) {
            $getAuthor = $author->getAuthorByUserId($_SESSION['user_data']['id']);

            $post->createPost($getAuthor['id'], $category_name, $_FILES["file"]["name"]);

            if ($post->message['response'] == true) {
                $_SESSION['message'] = "{$post->message['message']}";
                $_SESSION['message_type'] = 'success';
                header('Location: ../blog/');
            } else {
                $_SESSION['message'] = "{$post->message['message']}";
                $_SESSION['message_type'] = 'danger';
                header('Location: ../blog/');
            }
        } else {
            $_SESSION['message'] = "{$uploader['message']}";
            $_SESSION['message_type'] = 'warning';
            header('Location: ../blog/');
        }
    } else {
        $getAuthor = $author->getAuthorByUserId($_SESSION['user_data']['id']);

        $post->createPost($getAuthor['user_id'], $category_name, $picture_image);

        if ($post->message['response'] == true) {
            $_SESSION['message'] = "{$post->message['message']}";
            $_SESSION['message_type'] = 'success';
            header('Location: ../blog/');
        } else {
            $_SESSION['message'] = "{$post->message['message']}";
            $_SESSION['message_type'] = 'danger';
            header('Location: ../blog/');
        }
    }
}
