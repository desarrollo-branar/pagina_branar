<?php

require_once '../vendor/autoload.php';
use Branar\Blog\model\Role;
use Branar\Blog\model\User;
use Branar\Blog\model\Category;
use Branar\Blog\model\Author;
use Branar\Blog\includes\Connection;
use Branar\Blog\model\Label;
use Branar\Blog\model\Post;

date_default_timezone_set("America/Caracas");
$date = new DateTime();
$date->format("Y-m-d H:i:s");

# Role
$role = new Role('interacting');
// $role->createRole();
// $roleAll = $role->getAll();
// print_r($roleAll);

# User
$user = new User('branar_admin', 'Branar', 'Creator', 'ander.dev@gmail.com');
// $user->createUser('enabled',1,'v-123456');
// $users = User::getAll();
// print_r($users);

# Category
$category_name = 'Redes Sociales';
$category = new Category($category_name);
// $category->createCategory();
// print_r(Category::getAll());

# Author
$author = new Author('branar_admin', 'Branar', 'Creator', 'ander.dev@gmail.com');
// $author->createAuthor(1,'Redes, Progrmacion, Virtualizacion', '');
// $authors = Author::getAll();
// print_r($authors);

# Post
$post = array(
    'title' => 'Intelegencia Artificial',
    'description' => 'La inteligencia artificial (IA) es un conjunto de tecnologías que permiten que las computadoras realicen una variedad de funciones avanzadas.'
);
$post = new Post($post['title'], $post['description']);
$post->createPost(1, 1, '');
// $posts = Post::getAll();
// print_r($posts);

# Label
$label = new Label('Internet', 'yellow');
// $label->createPostLabel(4,3);
// print_r(Label::getPostLabelAll());

$login = User::login('ander.dev@gmail.com', 'v-123456');
// print_r($login);
// $checkStatus = $user->checkStatusUser($login);
// print_r($checkStatus);
echo strlen('Aplicar la Inteligencia Artificial en una empresa o negocio no se trata únicamente de escoger una herramienta de IA y pedirle al equipo que la utilice.');