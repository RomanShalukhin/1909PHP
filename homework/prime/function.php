<?php

function isPrime($number){
    if(in_array($number,[1,2,3])){
        return true;
    }
    for($i = 2; $i < $number; $i++){
        if($number % $i == 0){
            return false;
        }
       
    }
     return true;
   
}

function isValid()
{   
    $number = Post('number'); 
    $notEmpty = !empty($_POST['number']);
    $isNumeric = is_numeric($number); 
    
    return $notEmpty && $isNumeric; 
         
}

function Get($var){
    return isset($_GET[$var])? $_GET[$var] : null;
}

function Post($var){
   return isset($_POST[$var]) ? $_POST[$var] : null;
}

function redirectMy($to){
    
     header("Location: $to"); 
     die();
}