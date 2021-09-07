<?php

namespace crud;

class Format{
    public static function lower($value){
        return strtolower($value);
    }

    public static function conexDB() 
    {
        
        $host = "127.0.0.1";
        $dbname = "chichilo";
        $user='root';
        $password="";            
        $data_base = [
            'host' => $host,
            'dbname' => $dbname,
            'user' => $user,
            'password' => $password,
        ];
        return $data_base;
    }
}