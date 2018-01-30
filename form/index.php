<?php
error_reporting(E_ALL);
// echo 'POST';
// var_dump($_POST);

include 'functions.php';

$message = requestGet('message');

if($_POST){
    if(formIsValid()){
        //do stuff
        $message = 'YAY!!';
        redirect('/form?message='. $message);
    }
        // no else because redirect calls die;
        
        //tell user that form is invalid
        $message = 'Form is not valid';
}

include 'layout.phtml';


