<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica 14.4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="../index.html">Regresar al Menú de Practicas</a>
    <h1>Practica 14.1: Marco</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Líneas: <input type="number" name="lineas">
<br>
  Columnas: <input type="number" name="columnas">
<br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lineas = $_POST['lineas'];
    $columnas = $_POST['columnas'];
    generarMarco($lineas, $columnas);
}

function generarMarco($lineas, $columnas) {
    for ($i = 0; $i < $lineas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if ($i == 0 || $i == $lineas - 1 || $j == 0 || $j == $columnas - 1) {
                echo "*";
            } else {
                echo "  ";
            }
        }
        echo "<br>";
    }
}
?>
</body>
</html>