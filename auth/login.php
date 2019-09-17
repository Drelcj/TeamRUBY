<?php
if ( ! isset( $_POST['submitted'] ) )
header('Location: ' . $_SERVER['HTTP_REFERER']);

$credentials = [
    'username' => 'admin@example.com',
    'password' => 'teamruby19'
];

if ( $credentials['username'] !== $_POST['username'] OR $credentials['password'] !== $_POST['password'] )
{    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

session_start();

// Storing session data
$_SESSION["isLogged"] = "1";

header('Location:' . '../home.php');

exit();
