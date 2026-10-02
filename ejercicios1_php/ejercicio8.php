<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Ejercicio 8</h1>
    <p>Control de Acceso y Rango de Edad</p>

    <?php
        $edad = 0;

        switch (true) {
            case $edad <= 12 && $edad >= 0:
                echo "Niño";
                break;
            case $edad > 12 && $edad <= 17:
                echo "Adolescente";
                break;
            case $edad > 17 && $edad <= 64:
                echo "Adulto";
                break;
            case $edad > 64 && $edad <= 120:
                echo "Adulto mayor";
                break;
            case $edad < 0 || $edad > 120:
                echo "Edad no válida";
                break;
        }
    ?>
</body>
</html>