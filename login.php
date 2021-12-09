<?php

//this page is the login page for the site

session_start();
include_once 'conexion.php';

$user_login = $_POST['email'];
$user_password = $_POST['password'];

//Para verificar que el nuevo user no exista
$sql_2 = 'SELECT * FROM cliente WHERE email = ?';
$sentence = $pdo->prepare($sql_2);
$sentence->execute(array($user_login));
$resultado = $sentence->fetch();

if(!$resultado){
    //matar la operacion
    echo 'User not found';
    die();
}

if (password_verify($user_password, $resultado['Contrasena'])) {

    $_SESSION['admin'] = $user_login;
    header('Location: restringido.php');
    echo 'Welcome';
}else{
    echo 'Wrong password';
    die();
}