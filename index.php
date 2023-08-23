<?php

require_once 'vendor/autoload.php';

use Branar\Blog\model\Navegation;

$route = new Navegation();

# Pages
$route->add("/", "pages/index.php");
$route->add("index/", "pages/index.php");
$route->add('about/', 'pages/about.php');
$route->add('contact/', 'pages/contact.php');

# Login
$route->add('login/', 'pages/login.php');
$route->add('login/checklogin/', 'src/controller/login_proceso.php');

# service/
$route->add('service/csa', 'pages/csa.php');
$route->add('service/web-development', 'pages/devweb.php');
$route->add('service/infraestructure', 'pages/infraestructure.php');
$route->add('service/profitplus', 'pages/profitplus.php');
$route->add('service/servipack', 'pages/servicepack.php');
$route->add('service/socialmedia', 'pages/social-media.php');

# blog
$route->add('blog/', './src/views/home.php');
$route->add('Blog/{id}', './src/views/view_content_blog.php');
$route->add('blog_category/{title}', './src/views/view_post_by_category.php');
$route->add('blog/admin_blog', './src/views/admin_dashboard.php');
$route->add('create_post/', 'src/controller/create_post.php');
$route->add('blog/get_data_post/{id}', 'src/controller/get_post_data.php');
$route->add('blog/edit_post/{id}', 'src/controller/edit_post.php');


# category
$route->add('create_category/', 'src/controller/create_category.php');
$route->add('edit_category/{id}', 'src/controller/edit_category.php');

# label
$route->add('create_label/', 'src/controller/create_label.php');
$route->add('edit_label/{id}', 'src/controller/edit_label.php');
$route->add('edit_post_label/', 'src/controller/edit_labels_of_post.php');

$route->notFound('./pages/404.php');

