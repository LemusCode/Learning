<?php

$meses = array(
    'enero', 'febrero', 'marzo',
    'abril', 'mayo', 'junio',
    'julio', 'agosto', 'septiembre',
    'octubre', 'novimebre', 'diciembre'
);

//sort($meses);
rsort($meses);
#para ordenar de mayor a menor y por orden alfabetico, con numeros y strings
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del año</title>
</head>

<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
        foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }
        ?>
    </ul>
</body>

</html>