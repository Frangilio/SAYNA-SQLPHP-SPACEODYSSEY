<?php

use Core\Authenticator;
use Core\Session;
use Core\ValidationException;

use Http\LoginForm\LoginForm;

try{
    $form = LoginForm::validate($attributes = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ]);
}
catch (ValidationException $exception){
    Session::flash("errors", $form->errors());
    Session::flash("old", [
        'username' => $attributes['username']
    ]);
}


$auth = new Authenticator();

if($auth->attempt($attributes['username'], $attributes['password'])){
    redirect("/");
}

foreach ($auth->errors() as $field => $message){
    $form->error($field,$message);
}



return redirect("/login");

