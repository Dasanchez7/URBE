<?php
//Para agragar un user a la base de datos

//Llamar a la bdd
include_once 'conexion.php';

//Tomar los datos del formulario
$new_user = $_POST['email'];
$new_pass = $_POST['password'];
$new_pass2 = $_POST['password2'];
$new_cedula = $_POST['cedula'];
$new_nombre = $_POST['nombre'];
$new_apellido = $_POST['apellido'];

echo '<pre>';

//Para verificar que el nuevo user no exista
$sql_2 = 'SELECT * FROM cliente WHERE cedula = ?';
$sentence = $pdo->prepare($sql_2);
$sentence->execute(array($new_cedula));
$resultado = $sentence->fetch();

if($resultado){
    echo '<br>Existe el usuario';
    die();
}


//Encriptar la contraseña
$new_pass = password_hash($new_pass, PASSWORD_DEFAULT);

//Verificar que la contraseña sea igual
if (password_verify($new_pass2, $new_pass)) {
    echo '¡La contraseña es válida!';


    // sql sentence to add the new user and password to database    
    $sql = "INSERT INTO cliente (Email, Contrasena, Nombre, Apellido, Cedula) VALUES (?, ?, ?, ?, ?)";
    // prepare the sql sentence
    $sentencia_agregar = $pdo->prepare($sql);

    // execute the sql sentence
    if($sentencia_agregar->execute([$new_user, $new_pass, $new_nombre, $new_apellido, $new_cedula])){
        echo '<br>Usuario agregado correctamente';
    }else{
        echo '<br>No se pudo agregar el usuario';
    }
    //close conection to database   
    $pdo = null;
    $sentencia_agregar = null;
    // header('Location: index.php');

} else {
    echo 'La contraseña no es válida.';
}
