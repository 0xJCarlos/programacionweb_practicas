<?php
session_start();
// Contador de visitas con sesiones
if (!isset($_SESSION['site_visits'])) {
    $_SESSION['site_visits'] = 1;
} else {
    $_SESSION['site_visits']++;
}

// Contador de visitas con cookies
$cookie_name = 'site_visits_cookie';
if (!isset($_COOKIE[$cookie_name])) {
    setcookie($cookie_name, 1, time() + 3600 * 24 * 30); // Caduca en 30 días
} else {
    setcookie($cookie_name, $_COOKIE[$cookie_name] + 1, time() + 3600 * 24 * 30);
}

// Verificar si se proporcionó un color preferido
if (isset($_POST['color_preferido'])) {
    // Si sí, asignar ese valor a $color_preferido
    $color_preferido = $_POST['color_preferido'];
} else {
    // Si no, asignar una cadena vacía
    $color_preferido = '';
}

// Cerrar sesión
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}

//Ir a iniciar sesión
if (isset($_POST['backLogIn'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Practica Cookies y Sesion</title>
</head>
<body style="background-color: <?php echo $color_preferido; ?>;">
    <h1>Bienvenido al Layout Principal</h1>
    
    <?php if (isset($_SESSION['username'])) : ?>
        <p>¡Hola, <?php echo $_SESSION['username']; ?>!</p>
        <form method="post">
            <input type="submit" name="logout" value="Cerrar Sesión">
        </form>
    <?php else : ?>
        <p>¡Hola invitado!</p>
        <form method="post">
            <input type="submit" name="backLogIn" value="Ir a Iniciar Sesión">
        </form>
    <?php endif; ?>

    <!-- Formulario para preguntar el color preferido -->
    <form method="post">
        <label for="color_preferido">Color Preferido:</label>
        <input type="color" id="color_preferido" name="color_preferido" value="#FFFFFF">
        <input type="submit" value="Guardar">
    </form>

    <!-- Contadores de visitas -->
    <p>Visitas con sesión: <?php echo $_SESSION['site_visits']; ?></p>
    <p>Visitas con cookies: <?php echo isset($_COOKIE[$cookie_name]) ? $_COOKIE[$cookie_name] : 0; ?></p>
</body>
</html>
