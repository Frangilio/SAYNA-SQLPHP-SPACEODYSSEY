<?php

namespace Http\LoginForm;
use Core\ValidationException;
use Core\Validator;


class LoginForm{
    protected $errors = [];

    public function __construct($attributes){

        if(!validator::string($attributes['username'],3 , 200 )){
            $this->errors["username"] = "The username is invalid. It's wether too long or too short";
        }

        if(!Validator::string($attributes['password'], 7, 1000))
        {
            $this->errors["password"] = "The password is at least 7 characters";
        }
    }

    public static function validate($attributes){
      $instance = new static($attributes);
       
      
      if($instance->failed()){
        throw new ValidationException();
      }
      return $instance;
    }

    public function failed(){
        return count($this->errors);
    }

    public function errors(){
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
    }
    }