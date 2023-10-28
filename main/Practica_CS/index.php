<?php
session_start();

// Verificar si el usuario ya está logueado
if (isset($_SESSION['username'])) {
    header('Location: layout.php'); // Redirigir al layout si ya hay una sesión activa
    exit;
}

// Verificar si se envió el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['iniciarSesion'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $_SESSION['username'] = $username;
        header('Location: layout.php');
        exit;
    }
    elseif (isset($_POST['iniciarInvitado'])) {
        header('Location: layout.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Practica Cookies y Sesiones</h1>
    <a href="../index.html">Regresar al menú de practicas</a>
    <p>Iniciar sesión</p>
    <form method="post">
        <label for="username">Nombre de Usuario:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" name="iniciarSesion" value="Ingresar Sesión">
        <input type="submit" name="iniciarInvitado" value="Ingresar como Invitado">
    </form>
</body>
</html>
