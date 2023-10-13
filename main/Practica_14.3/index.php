<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica 14.3: Numero Mayor y Menor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../index.html">Regresar al Menú de Practicas</a> <br>
    <h1>Practica 14.3: Número Mayor y Menor</h1> 
<?php
$mayor = null;
$menor = null;
$error = null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['numeros'])) {
        $numeros = $_POST['numeros'];
        foreach ($numeros as $numero) {
            if ($numero < 0) {
                $error = "Por favor ingresa únicamente números positivos";
                break;
            }
        }
        if (is_null($error)) {
            $mayor = max($numeros);
            $menor = min($numeros);
        }
    }
}
?>

<form method="post">
    ¿Cuántos números deseas ingresar? <br>
    <input type="number" name="cantidad" value="<?php echo isset($_POST['cantidad']) ? $_POST['cantidad'] : ''; ?>">
    <br>
    <?php if (!empty($_POST['cantidad'])): ?>
        Ingresa los números <br>
        <?php for ($i = 0; $i < $_POST['cantidad']; $i++): ?>
            <input type="number" name="numeros[]">
            <br>
        <?php endfor; ?>
        <input type="submit" value="Enviar">
    <?php else: ?>
        <input type="submit" value="Generar campos">
    <?php endif; ?>
</form>

<?php if (!is_null($error)): ?>
    <p><?php echo $error; ?></p>
<?php elseif (!is_null($mayor) && !is_null($menor)): ?>
    <p>El número mayor es: <?php echo $mayor; ?></p>
    <p>El número menor es: <?php echo $menor; ?></p>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>">Comenzar de nuevo</a>
<?php endif; ?>
</body>
</html>