<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica 15</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../index.html">Regresar al menú de practicas</a>
    <h1>Practica 15: Calculadora</h1>
    <form action="calcu.php", method="POST">
    <label>Ingresa un primer numero</label>
        <input type="text" name="n1"><br>
        <label>Ingresa un segundo numero</label>
        <input type="text" name="n2"><br>
        <hr>

        <input type="checkbox" name="operacion1" value="suma">
        <label for="operacion1">Suma</label><br>

        <input type="checkbox" name="operacion2" value="resta">
        <label for="operacion2">Resta</label><br>

        <input type="checkbox" name="operacion3" value="multiplicacion">
        <label for="operacion3">Multiplicacion</label><br>

        <input type="checkbox" name="operacion4" value="division">
        <label for="operacion4">Division</label><br>

        <input type="submit" value="Calcular">
        <hr>



</body>
</html>