<!DOCTYPE html>
<html>
<head>
    <title>Tabla de JSON</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Tabla de JSON</h2>

    <?php
        $entrada = $_POST["entrada_json"];

        $datos = json_decode($entrada, true);

        echo "<table>";
        echo "<tr><th>Clave</th><th>Valor</th></tr>";
        foreach ($datos as $clave => $valor) {
            echo "<tr><td>$clave</td><td>$valor</td></tr>";
        }
        echo "</table>";
    ?>

</body>
</html>
