<?php
include './functions.php';
//require __DIR__ . '/twilio-php-main/src/Twilio/autoload.php';
//use Twilio\Rest\Client;
//
//
//$t_account_sid = "ACd0b1687dbafae84084b9d8c145496d54";
//$t_auth_token = "98ed255cc07d9e0484eb017f269ab4af";

$user = $params['user'];

if(empty($user['username']) || empty($user['password'])){
    $_SESSION['ERROR'] = "Please enter all fields";
    header("Location: login.php");
    die;
}

$username = $user['username'];
$password = $user['password'];

$check = $db->query("SELECT * FROM users WHERE username LIKE '$username' AND password LIKE '$password'")->fetch();



if(empty($check)){
    $_SESSION['ERROR'] =  "Invalid Username or Password";
    header("Location: login.php");
    die;
}else{
    
    
    
    $_SESSION['user'] = $check;
    $user_id = $check['id'];

    header("Location: index.php");
    die;
    
}

