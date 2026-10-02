<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $año = $_POST["año"];
        $color = $_POST["color"];
        $neumaticos = $_POST["neumaticos"];

        $vehiculo = [
            "marca" => $marca,
            "modelo" => $modelo,
            "año" => $año,
            "color" => $color,
            "neumaticos" => $neumaticos,
        ];

        echo "<strong>Marca: </strong>" . $vehiculo["marca"] . "<br>";
        echo "<strong>Modelo: </strong>" . $vehiculo["modelo"] . "<br>";
        echo "<strong>Año: </strong>" . $vehiculo["año"] . "<br>";
        echo "<strong>Color: </strong>" . $vehiculo["color"] . "<br>";
        echo "<strong>Neumáticos: </strong>" . $vehiculo["neumaticos"] . "<br>";
    }
?>