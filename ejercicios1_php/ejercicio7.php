<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Ejercicio 7</h1>
    <p>Comparación Débil vs. Comparación Estricta</p>

    <?php
        $valorA = 10;
        $valorB = "10";

        $comp = $valorA == $valorB;
        $comp_estr = $valorA === $valorB;

        echo "Valor A: ";
        var_dump($valorA);

        echo "<br>Valor B: ";
        var_dump($valorB);

        echo "<br><br>Usando comparación débil: ";
        var_dump($comp);

        echo "<br>Usando comparación estricta: ";
        var_dump($comp_estr);

        echo "<br><br>Son diferentes porque == compara solo el valor, pero === compara el valor y el tipo de dato"
    ?>
</body>
</html>