<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $sueldo_basico = $_POST["sueldo"];
        $sueldo_neto = $sueldo_basico;
        $bono = 0;

        if ($sueldo_basico < 500000) {
            $bono = $sueldo_basico * 0.15;
            $sueldo_neto += $bono;
        }


        echo "<h2>Recibo de sueldo</h2>";
        echo "<p>Empleado: " . $nombre . "</p>";
        echo "<p>Sueldo básico: $" . $sueldo_basico . "</p>";
        echo "<p>Bono: $" . $bono . "</p>";
        echo "<p>Sueldo neto: $" . $sueldo_neto . "</p>";
    }
?>