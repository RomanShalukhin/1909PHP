<?php
error_reporting(E_ALL);
// echo 'POST';
// var_dump($_POST);

include 'functions.php';

$message = requestGet('message');

if($_POST){
    if(formIsValid()){
        
        $res = isPrime(requestPost('number'));
        $message = requestPost('number') . " is ";
        $message .= $res ? 'Prime' : 'Not prime';
        redirect('/form_tasks/prime?message='. $message);
    }
        // no else because redirect calls die;
        
        //tell user that form is invalid
        $message = 'Form is not valid';
}

include 'layout.phtml';


