<?php
error_reporting(E_ALL);

function isValid()
{
    return !empty($_POST['first_name']) &&
            !empty($_POST['last_name']) &&
            !empty($_POST['email']); 
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

$message = Get('message');

if($_POST){
    
    if(isValid()) {
    
        $message = 'valid';
            redirectMy("/homework/form_task?message=" . $message); 
    } 
        $message = 'not valid'; 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    
    <b><?=$message?></b>
     <form method='post'>
         <input type="text" name="first_name" placeholder="First name" value="<?=Post('first_name')?>"/> <br>
         <input type="text" name="last_name" placeholder="Last name"value="<?=Post('last_name') ?>" /> <br>
         <input type="email" name="email" placeholder="Email" value="<?=Post('email') ?>" /> <br>
         <input type="submit" value="Submit"/>
     </form>
</body>
</html>