<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>Ejercicio 11</h1>
    <p>Tabla de Multiplicar Dinámica con do-while</p>

    <?php
        $base = 5;

        $iterador = 0;
        do {
            echo $base . " x " . $iterador . " = " . ($base * $iterador);
            echo "<br>";
            $iterador++;
        }
        while($iterador <= 10);
    ?>
</body>
</html>