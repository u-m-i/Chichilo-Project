<?php

namespace crud;

use mysqli;

class Format{

    //Experiment
    public static function lower($value){

        return strtolower($value);
    }

    public static function experiment(){

        $host = "127.0.0.1";
        // Uncomment this variable, to enter the port 
        #$port = "";
        $dbname = "chichilo";
        $user='root';
        $password="";
        $conextion = new mysqli($host, $user, $password, $dbname);
        return $conextion;

    }
    
    public static function conexDB() 
    {
        // Change the variables to your data base
        

        $host = "127.0.0.1";

        // Uncomment this variable, to enter the port 
        #$port = "";

        $dbname = "chichilo";
        $user='root';
        $password="";
        
        // Returns an asociative array
        $data_base = [
            'host' => $host,
            'dbname' => $dbname,
            'user' => $user,
            'password' => $password,
        ];
        return $data_base;
    }

    public static function confirm($conextion, $email){
        /**
         * This function verify the given email
         */
        $sql = "SELECT * FROM usuario WHERE email = '$email'";

        $result = mysqli_query($conextion,$sql);
        $count = mysqli_num_rows($result);

        // Retrives the numbers of rows found

        return $count;
    }

    public static function fetchAll($conextion){
        $query = "SELECT * FROM usuario";

        ## Complicated error
        $result = $conextion->query($query);

        return $result;
    }

    public static function deleteRow($conextion, $email){

    }

    public static function changeRow($conextion, $email){

    }
}