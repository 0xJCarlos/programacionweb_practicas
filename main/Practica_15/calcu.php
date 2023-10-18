<html>
    <head>
        <title>Practica 15</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
    
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    
    if(isset($_POST["operacion1"])){
        $v1 = $_POST["operacion1"];
    }

    if(isset($_POST["operacion2"])){
        $v2 = $_POST["operacion2"];
    }

    if(isset($_POST["operacion3"])){
        $v3 = $_POST["operacion3"];
    }

    if(isset($_POST["operacion4"])){
        $v4 = $_POST["operacion4"];
    }

    if(isset($v1)){
        $res = $n1+$n2;
        echo "<br> Suma: " . $n1 . " + " . $n2 . " = " . $res;
    }

    if(isset($v2)){
        $res = $n1-$n2;
        echo "<br> Resta: " . $n1 . " + " . $n2 . " = " . $res;
    }

    if(isset($v3)){
        $res = $n1*$n2;
        echo "<br> Multiplicacion: " . $n1 . " + " . $n2 . " = " . $res;
    }

    if(isset($v4)){
        if($n2 == 0){
            echo "Error: No se puede dividir entre 0.";
        }
        else{
            $res = $n1/$n2;
            echo "<br> División: " . $n1 . " + " . $n2 . " = " . $res;
        }
    }
     
    ?>    
    </body>
</html>