<?php
$edad = 18;
$nombre = 'Lemus';

if ($edad >= 18 && $nombre == 'Lemus') {
    echo '<h1> Bienvenido </h1>';
}


if ($edad < 18 || $nombre != 'Lemus') {
    echo '<h1> Menor de edad, Lemus </h1>';
}
