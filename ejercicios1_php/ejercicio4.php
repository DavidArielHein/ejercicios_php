<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>Uso de Valores Inmutables</p>

    <?php
        const IMPUESTO = 21;
        const TITULO_SISTEMA = "Sistema de facturación";

        echo defined("IMPUESTO") . "<br>";

        if (defined("IMPUESTO") && defined("TITULO_SISTEMA")){
            echo "Las constantes \"IMPUESTO\" y \"TITULO_SISTEMA\" existen";
        }
        else {
            echo "Las constantes no existen";
        }
    ?>
</body>
</html>