<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>Ejercicio 13</h1>
    <p>Vector Dinámico</p>

    <?php
        $vector = [];
        $datos = ["C", "Java", "Python", "Ruby", "PHP"];

        for($i = 0; $i <= 5; $i++) {
            $vector[] = $datos[$i];
        }

        echo "<ul>";
        foreach($vector as $lenguaje) {
            echo "<li>" . $lenguaje . "</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>