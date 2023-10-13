<!DOCTYPE html>
<html lang="en">
<head>
    <title>Practica 14.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="../index.html">Regresar al menú de prácticas</a>
<h1>Practica 14.4: Reparto de Herencia</h1>
<?php
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $herencia_total = $_POST['herencia_total'];
    $num_hijos = $_POST['num_hijos'];

    if ($num_hijos == 0) {
        $comision_notario = $herencia_total * 0.05;
        $herencia_conyuge = $herencia_total - $comision_notario;
        $mensaje = "Herencia total: " . $herencia_total . "<br>";
        $mensaje .= "Herencia para el cónyuge: " . $herencia_conyuge . "<br>";
        $mensaje .= "Comisión para el notario: " . $comision_notario;
    } else {
        $comision_notario = $herencia_total * 0.03;
        $herencia_conyuge = ($herencia_total - $comision_notario) / 2;
        $herencia_hijos = ($herencia_total - $comision_notario) / 2;
        $mensaje = "Herencia total: " . $herencia_total . "<br>";
        $mensaje .= "Herencia para el cónyuge: " . $herencia_conyuge . "<br>";
        $mensaje .= "Herencia para cada hijo: " . ($herencia_hijos / $num_hijos) . "<br>";
        $mensaje .= "Comisión para el notario: " . $comision_notario;
    }
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Herencia total: <input type="number" name="herencia_total"><br>
  Número de hijos: <input type="number" name="num_hijos"><br>
  <input type="submit">
</form>

<?php
echo $mensaje;
?>

</body>
</html>