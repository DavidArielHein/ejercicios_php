<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejercicio 5</h1>
    <p>Calculadora Comercial Básica</p>

    <?php
        const IVA = 1.21;

        $precio_unitario = 150;
        $cantidad_comprada = 5;

        $subtotal_sin_iva = $precio_unitario * $cantidad_comprada;
        $subtotal_con_iva = $subtotal_sin_iva * IVA;

        echo "Subtotal sin IVA: " . $subtotal_sin_iva . "<br>";
        echo "Subtotal + IVA: " . $subtotal_con_iva . "<br>";

        $subtotal_con_iva -= 50;
        echo "Subtotal con descuento: " . $subtotal_con_iva;
    ?>
</body>
</html>