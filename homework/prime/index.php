<?php
error_reporting(E_ALL);

include 'function.php';

$message = Get('message');

if($_POST){
    
    if(isValid()) {
          $res =  isPrime(Post('number')); 
          $message = Post('number') . " is ";
          $message .= $res ? 'Prime': 'Not prime'; 
            redirectMy("/homework/prime?message=" . $message); 
    } 
       
}


include 'layout.phtml'; 
