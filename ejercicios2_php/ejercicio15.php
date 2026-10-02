<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Ejercicio 15</h1>
    <h3>Matriz y Bucle Foreach</h3>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Stock en kg</th>
                <th>Precio por kg</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $productos = [
                    ["id" => 1, "nombre_producto" => "manzana", "stock_kg" => 12, "precio_kg" => 5200],
                    ["id" => 2, "nombre_producto" => "pera", "stock_kg" => 5, "precio_kg" => 4200],
                    ["id" => 3, "nombre_producto" => "durazno", "stock_kg" => 22, "precio_kg" => 5000],
                    ["id" => 4, "nombre_producto" => "lechuga", "stock_kg" => 10, "precio_kg" => 2020],
                    ["id" => 5, "nombre_producto" => "tomate", "stock_kg" => 3, "precio_kg" => 1300],
                ];

                foreach($productos as $producto) {
                    echo "<tr>";
                    echo "<td>" . $producto["id"] . "</td>";
                    echo "<td>" . $producto["nombre_producto"] . "</td>";
                    echo "<td>" . $producto["stock_kg"] . "</td>";
                    echo "<td>" . $producto["precio_kg"] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>