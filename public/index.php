<?php
session_start();

use Core\Session;

require dirname(__DIR__)."/vendor/autoload.php";

const BASE_PATH = __DIR__ . "/../";
var_dump(BASE_PATH);

require BASE_PATH . 'Core/functions.php';



// spl_autoload_register(function ($class){

//     $class = str_replace("\\",DIRECTORY_SEPARATOR, $class);
   
//     require base_path("$class.php");
// });


require base_path("bootstrap.php"); 

$router = new Core\Router();

require base_path("routes.php");


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);

Session::unflash();