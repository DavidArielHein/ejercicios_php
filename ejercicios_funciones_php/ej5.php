<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Desafío integrador</h1>
    <form action="ej5.php" method="post">
        <label for="texto">Nombre</label>
        <input type="text" name="nombre" placeholder="John Doe">
        <br>

        <label for="texto">Frase favorita</label>
        <input type="text" name="frase" placeholder="Hola mundo">
        <br>

        <button type="submit">Enviar</button>
    </form>

    <?php
        function limpiarTexto(string $texto) {
            return trim($texto);
        }

        function contarCaracteres(string $texto) {
            return mb_strlen(limpiarTexto($texto), "UTF-8");
        }

        function estaPHP(string $texto) {
            if (strpos(strtoupper(trim($texto)), "PHP") !== false) {
                return true;
            }

            return false;
        }


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];
            $frase = $_POST["frase"];

            echo "Hola " . limpiarTexto($nombre) . "!<br>";
            echo 'Tu frase favorita es "' . limpiarTexto($frase) . '"<br>';
            if (estaPHP($frase)) {
                echo "Adentro de tu frase esta PHP, bienvenido al club!";
            }
        }
    ?>
</body>
</html>