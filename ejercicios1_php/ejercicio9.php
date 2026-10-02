<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Ejercicio 9</h1>
    <p>Menú de Opciones con switch</p>

    <?php
        $diaSemana = 3;

        switch ($diaSemana) {
            case 1:
                echo "Lunes";
                break;
            case 2:
                echo "Martes";
                break;
            case 3:
                echo "Miércoles";
                break;
            case 4:
                echo "Jueves";
                break;
            case 5:
                echo "Viernes";
                break;
            case 6:
                echo "Sábado";
                break;
            case 7:
                echo "Domingo";
                break;
            default:
                echo "Número de día no válido";
        }
    ?>
</body>
</html>