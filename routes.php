<?php


$router->get('/', 'index.php');
$router->get('/dashboard', 'index.php');
$router->get('/missions','missions/show.php');
$router->get('/missions/create','missions/create.php');