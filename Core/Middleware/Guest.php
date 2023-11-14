<?php

namespace Core\Middleware;


class Guest{
    
    public function handle(){
        if($_SESSION["user"] ?? false){
            dd($_SESSION);
            header("location: /");
            exit();
        }
    }

}
