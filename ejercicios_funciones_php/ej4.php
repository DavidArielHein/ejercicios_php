<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Arreglos</h1>

    <?php
        $productos = [
            ["producto" => "manzana", "stock_kg" => 12],
            ["producto" => "morron", "stock_kg" => 2],
            ["producto" => "pera", "stock_kg" => 10],
            ["producto" => "uva", "stock_kg" => 3],
        ];

        function esStockBajo(array $producto) {
            if ($producto["stock_kg"] < 10) {
                return true;
            }

            return false;
        }

        foreach ($productos as $producto) {
            if (esStockBajo($producto)) {
                echo "El stock de " . $producto["producto"] . " es bajo<br>";
            }
        }
    ?>
</body>
</html>