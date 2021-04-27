<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;
 class model{
     static function db(){
        $options = [
            //required
            'username' =>USERNAME,
            'database' => DATABASE,
            //optional
            'password' =>PASSWORD,
            'type' => DB_TYPE,
            'charset' => 'utf8',
            'host' => HOST,
            'port' => '3306'
        ];
        
       return  $db = new Database($options);
    }
 }

?>