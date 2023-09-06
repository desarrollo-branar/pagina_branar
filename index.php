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
$route->add('logout/', 'src/controller/logout.php');
$route->add('login/checklogin/', 'src/controller/login_proceso.php');

# Account
$route->add('register/account/', 'src/controller/account/register.php');
$route->add('register/verify_account', 'src/views/verify_account.php');
$route->add('register/resend_code/{email}', 'src/controller/account/resendCode.php');
$route->add('confirm_account/', 'src/controller/account/confirm_account.php');

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
$route->add('create_post/', 'src/controller/create_post.php');
$route->add('blog/get_data_post/{id}', 'src/controller/get_post_data.php');
$route->add('edit_post/{id}', 'src/controller/edit_post.php');

# filter
$route->add('blog/filtrado', 'src/views/view_filter.php');

# category
$route->add('create_category/', 'src/controller/create_category.php');
$route->add('edit_category/{id}', 'src/controller/edit_category.php');

# label
$route->add('create_label/', 'src/controller/create_label.php');
$route->add('edit_label/{id}', 'src/controller/edit_label.php');
$route->add('edit_post_label/', 'src/controller/edit_labels_of_post.php');

# comment
$route->add('blog/submit_comment/', './src/controller/create_comment.php');
$route->notFound('./pages/404.php');

