<?php

namespace Core;

class Authenticator{

    protected $errors = [];

    public function attempt($username, $password){

        $resultUser = App::resolve("Core\Database")->query(" SELECT * FROM users WHERE username = :username", [
        "username" => $username
        ])->find();


        if ($resultUser)
        {
            if(password_verify($password, $resultUser["password"])){
                $this->login(
                    [
                        "username" =>$username
                    ]);
            
                header("location: /");
                return true;
            }
            $this->errors["password"] = "Wrong password. Try another one asshole!!!";
        }
        else{
            $this->errors["username"] = "No matching account for this username";
        }
        return false;
    }

   
    public function login ($user){
   
        $_SESSION['user'] = [
            'username' => $username
        ];
        session_regenerate_id(true);

    }   


    public function logout(){
        
       Session::destroy();

       header('location: /');
    }

    public function errors(){
        return $this->errors;
    }
}