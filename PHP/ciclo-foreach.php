<?php
$meses = array(
    'enero', 'febrero', 'marzo',
    'abril', 'mayo', 'junio',
    'julio', 'agosto', 'septiembre',
    'octubre', 'novimebre', 'diciembre'
);

$alejandro = array(
    'telefono' => 12334234,
    'edad' => 20,
    'pais' => 'mexico'
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach</title>
</head>

<body>
    <ul>
        <?php
        /*foreach ($meses as $mes) {
            echo '<li>' . $mes . '</li>';
        }*/

        foreach ($alejandro as $dato => $valor) {
            echo '<li>' . $dato . ': ' . $valor . '</li>';
        }
        ?>
    </ul>
</body>

</html>