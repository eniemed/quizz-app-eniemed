<?php
require_once 'bd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $email = $_POST['email'];

    $query = "INSERT INTO User (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($query) === TRUE) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error al registrar: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="">
        <label>Usuario: <input type="text" name="username" required></label><br>
        <label>Contraseña: <input type="password" name="password" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
