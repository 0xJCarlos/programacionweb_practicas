<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica 16</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../index.html">Regresar al Menú de Practicas</a>
    <h1>Practica 16: Calculadora</h1>
    <?php
    if (isset($_POST['numeros'])) {
        $numeros = $_POST['numeros'];
        $operacion = $_POST['operacion'];
        $resultado = 0;

        switch ($operacion) {
            case 'suma':
                foreach ($numeros as $numero) {
                    $resultado += $numero;
                }
                break;
            case 'resta':
                $resultado = $numeros[0];
                for ($i = 1; $i < count($numeros); $i++) {
                    $resultado -= $numeros[$i];
                }
                break;
            case 'multiplicacion':
                $resultado = 1;
                foreach ($numeros as $numero) {
                    $resultado *= $numero;
                }
                break;
        }
        echo "El resultado de la " . $operacion . " es: " . $resultado;
    }
        elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php 
            for ($i = 0; $i < $cantidad; $i++): ?>
            <?php 
                $cuenta = $i+1;
                echo 'Numero: ' . $cuenta 
            ?>
            <input type="number" name="numeros[]">
            <br>
        <?php endfor; ?>
        
        <input type="radio" name="operacion" value="suma"> Suma <br>
        <input type="radio" name="operacion" value="resta"> Resta <br>
        <input type="radio" name="operacion" value="multiplicacion"> Multiplicación <br>
        <input type="submit" value="Aceptar">
    </form>
    <?php
    } else {
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            ¿Cuántos números quieres ingresar? <br>
            <input type="number" name="cantidad" min="2" max="10">
            <input type="submit" value="Aceptar">
        </form>
    <?php
    }
    ?>
</body>
</html>