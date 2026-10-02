<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Parámetros y retorno</h1>

    <?php
        function calcularArea(int $base, int $altura) {
            return $base * $altura;
        }

        $area = calcularArea(10, 6);

        if ($area > 50) {
            echo "El área es " . $area;
        }
    ?>
</body>
</html>