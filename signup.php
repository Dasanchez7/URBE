<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
</head>
<body>
    <!-- Dropdown menu idea para que el user escoja que quiere hacer y asi se le muestra todo -->
    <h1>Signup</h1>
<!-- Para anadir la info del user -->
    <form action="agregar_usuario.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="cedula" placeholder="Cedula">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="text" name="apellido" placeholder="Apellido">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password2" placeholder="Confirm Password">
        <input type="submit" value="Sign up">
    </form>
<!-- Para anadir la info del user -->

        <h2>Login</h2>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>
</body>
</html>