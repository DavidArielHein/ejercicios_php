<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Texto</h1>
    <form action="ej3.php" method="post">
        <label for="texto">Nombre</label>
        <input type="text" name="texto">

        <button type="submit">Enviar</button>
    </form>

    <?php
        function limpiarTexto(string $texto) {
            return trim($texto);
        }

        function convertirAMayusculas(string $texto) {
            return strtoupper(limpiarTexto($texto));
        }

        function contarCaracteres(string $texto) {
            return mb_strlen(limpiarTexto($texto), "UTF-8");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $texto_in = $_POST["texto"];

            echo "<pre>Texto original: " . $texto_in . "<br></pre>";
            echo "Texto limpio: " . limpiarTexto($texto_in) . "<br>";
            echo "Texto en mayusculas: " . convertirAMayusculas($texto_in) . "<br>";
            echo "Caracteres del texto: " . contarCaracteres($texto_in) . "<br>";
        }
    ?>
</body>
</html>