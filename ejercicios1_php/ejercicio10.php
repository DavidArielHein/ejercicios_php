<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>Ejercicio 10</h1>
    <p>Sumatoria e Incrementos con for</p>

    <?php
        $suma = 0;

        for($i = 1; $i <= 20; $i++) {
            if($i % 2 == 1) {
                $suma += $i;
            }
        }

        echo "La suma de todos los numeros impares entre 1 y 20 es: " . $suma;
    ?>
</body>
</html>