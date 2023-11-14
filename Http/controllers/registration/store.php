<?php

// validate form information
use Core\Validator;
use Core\App;
use Http\LoginForm\LoginForm;

$username = $_POST['username'];
$password = $_POST['password'];

$form = new LoginForm();
if(!$form->validate($username,$password)){
    return view("registration/create.view.php", [
                "errors"=>$form->errors()
            ]);
}



$db = App::resolve("Core\Database");
$resultUser = $db->query(" SELECT * FROM users WHERE username = :username", [
    "username" => $username
])->find();
// );
if (!empty($resultUser))
{
   return view("registration/create.view.php", [
    "errors"=>["username" => "That username is already in use"]
]);
}// store user
else {
    // // redirect    to home page
    $db->query("INSERT INTO users(username, password) VALUES (:username, :password)", [
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    
    login(
        [
            "username" =>$username
        ]);
    header("location: /");
}