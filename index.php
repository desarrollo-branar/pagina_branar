<?php

require_once 'vendor/autoload.php';

use Branar\Blog\model\Navegation;

$route = new Navegation();

# Pages
$route->add("/", "pages/index.php");
$route->add("index/", "pages/index.php");
$route->add('about/', 'pages/about.php');
$route->add('contact/', 'pages/contact.php');

# service/
$route->add('service/csa', 'pages/csa.php');
$route->add('service/web-development', 'pages/devweb.php');
$route->add('service/infraestructure', 'pages/infraestructure.php');
$route->add('service/profitplus', 'pages/profitplus.php');
$route->add('service/servipack', 'pages/servicepack.php');
$route->add('service/socialmedia', 'pages/social-media.php');

# blog
$route->add('blog/', './src/views/home.php');