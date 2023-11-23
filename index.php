<?php
//your PHP code goes here
require 'Routing.php';
include("includes/header.php");

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index', 'DefaultController');
Routing::get('projects', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::run($path);

?>
