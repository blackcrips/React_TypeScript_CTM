<?php

class Controller extends Model
{
    public function checkLoginCredentials($username,$password){
        $this->dbCheckLoginCredentials($username,$password);
        // if(!$this->dbdbCheckLoginCredentials($username,$password)){
        //     exit(json_encode(false));
        // } else {
        //     exit(json_encode(true));
        // }
    }
}