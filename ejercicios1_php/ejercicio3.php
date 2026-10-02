<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p>Conversión Explícita de Tipos (Casting)</p>

    <?php
        $montoString = "4500.85";

        $montoEntero = floatval($montoString);

        echo "Esto es un numero en string: " . $montoString . "<br>";
        echo "Este es el mismo numero pero transformado a float: " . $montoEntero;
    ?>
</body>
</html>