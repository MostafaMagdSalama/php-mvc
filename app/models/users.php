<?php
namespace MVC\models;
use MVC\core\model;
class users extends model{
    function GetAllUsers(){
       return model::db()->rows("SELECT * FROM user");
    }
    function GetUser($email,$password){
       $user_data = model::db()->row("SELECT * FROM `user` WHERE '$email' = `email` && '$password' = `password`");
       return $user_data;
    }
    function SetUser($email,$username,$password){
       
     $id= model::db()->insert('user', ['email' => $email, 'username' => $username,"password"=>$password]);
     return $id;
    }
}


?>