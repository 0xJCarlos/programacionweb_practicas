<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica 14.2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../index.html">Regresar al Menú de Practicas</a>
    <h1>Practica 14.2: Numeros del 1 al 10 y Alfabeto (While)</h1>
<?php
// Ciclo while para mostrar los números del 1 al 10
$numero = 1;
while ($numero <= 10) {
    echo $numero . "\n";
    $numero++;
}

echo "<br><br><br>";

// Ciclo while para mostrar el alfabeto completo
$letra = 'a';
while ($letra != 'aa') {
    echo $letra . "\n";
    $letra++;
}
?>
</body>
</html>