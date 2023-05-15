<?php

class Model extends Dbh 
{
    protected function dbCheckLoginCredentials($username,$password){
        $sql = "SELECT username,password FROM user_accounts WHERE username = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$username]);

        $result = $stmt->fetch();

        $passwordHash = $result['password'];
        
        // exit(json_encode(password_verify($password,$passwordHash)));

        if(!password_verify($password,$passwordHash)){
            exit(json_encode(false));
        } else {
            exit(json_encode(true));
        }
    }
}