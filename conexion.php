<?php
// start a conection with the database
$linl = 'mysql:host=localhost;dbname=paradoxcinema';
$usuario = 'root';
$contrasena = '';


try{
    $pdo = new PDO($linl, $usuario, $contrasena);// Para crear un objeto pdo que conecte con la bdd
    echo '<br>conectado<br>';
}catch(Exception $e){
    die("Error: " . $e->getMessage());
}
?>