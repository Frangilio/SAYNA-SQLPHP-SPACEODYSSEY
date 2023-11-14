<?php

namespace Http\Model;
use Core\App;
//class Missions extends Models{
class Missions{
    protected $db;
    function __construct(){
        $this->db = App::resolve("Core\Database");
    }
}