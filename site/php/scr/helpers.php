<?php

if(! function_exists('conex'))
{
    function conex()
    {
        return crud\Format::conexDB();
    }
}

if(! function_exists('lower')){
    function lower($value)
    {
        return crud\Format::lower($value);
    }
}

if(! function_exists('verify'))
{
    function verify($conextion){

        if(!$conextion){
            die("Error".mysqli_connect_error());
        }

        return true;
    }
}

if(! function_exists('confirm')){

    function confirm($conextion,$email){

        return crud\Format::confirm($conextion,$email);
    }
}

if(! function_exists('read')){
    
    function read($conextion){

        return crud\Format::fetchAll($conextion); 
    }
}


if(! function_exists('update')){
    
    function update($conextion){
        
    }
}

if(! function_exists('delete_user')){
    
    function delete_user($conextion, $email){
        
        $query = "DELETE FROM usuario WHERE usuario.email = {$email}";


        

    }
}

if(! function_exists('experiment')){
    function experiment(){
        return crud\Format::experiment();
    }
}