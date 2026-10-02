<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Primeras funciones</h1>

    <?php
        function mostrarTitulo() {
            echo "<h2>Listado de alumnos</h2>";
        }

        function saludar(string $nombre) {
            echo "Hola " . $nombre . "!<br>";
        }

        mostrarTitulo();
        mostrarTitulo();

        saludar("Ana");
        saludar("Bruno");
        saludar("Carlos");
    ?>
</body>
</html>