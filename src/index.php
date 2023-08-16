<?php

require_once '../vendor/autoload.php';
use Branar\Blog\model\User;
use Branar\Blog\model\Category;
use Branar\Blog\model\Author;
use Branar\Blog\includes\Connection;
use Branar\Blog\model\Post;

date_default_timezone_set("America/Caracas");
$date = new DateTime();

# User
$user = new User('branar_admin', 'Branar', 'Creator', 'ander.dev@gmail.com');

# Category
$category_name = 'Tecnología';
$category = new Category($category_name);

# Author
$author = new Author('branar_admin', 'Branar', 'Creator', 'ander.dev@gmail.com');

# Post
$post = array(
    'title' => 'Titulo Tecnologia',
    'description' => 'description'
);
$post = new Post($post['title'], $post['description']);


if ($new_category){
    print_r(Post::getAll());
}else{
    echo 'error';
}

