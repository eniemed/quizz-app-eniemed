<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión y Registro</title>
</head>
<body>
    <h1>Inicio de Sesión</h1>
    <form method="post" action="login.php">
        <label>Usuario: <input type="text" name="username" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <input type="submit" value="Iniciar Sesión">
    </form>

    <h1>Registro</h1>
    <form method="post" action="register.php">
        <label>Usuario: <input type="text" name="username" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
