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

    if (isset($_FILES["file"])) {
        $image = new ImageUploader();
        $uploader = $image->uploadImage($_FILES["file"]);

        if ($uploader['response'] == true) {
            $getAuthor = $author->getAuthorByUserId($_SESSION['user_data']['id']);

            $create_post = $post->createPost($getAuthor['id'], $category_name, $_FILES["file"]["name"]);

            if ($create_post['response'] == true) {
                dd($create_post);
            } else {
                dd($create_post);
            }
        } else {
        }
    } else {
        $getAuthor = $author->getAuthorByUserId($_SESSION['user_data']['id']);

        $create_post = $post->createPost($getAuthor['user_id'], $category_name, $picture_image);

        if ($create_post['response'] == true) {
            header('Location: ../admin');
        } else {
            dd($create_post);
        }
    }
}
