<?php

#string: Cadena de texto
$nombre = "Lemus";

#integer: Numeor enteros
$numero = 7;

#Double: numero decimal
$decimal = 7.7;

#boleano: Verdadero o falso
$bool = false;

#array: Arreglo
#Object. Objeto
#Clasee: Clase
#Null: Una variable sin valor

#diferencia entre comillas dobes y sencillas
#las comillas sobles nos permiten llamar variables
#las comillas simples no permiten ejecutar variables

#Lo idea es usar comillas sencillas, excepto cuando 
#se quiera el valor de una variable
#Las comillas simples facilitan la seguridad en PHP
#echo "Holo $nombre </br>";

#echo 'Holo' . $nombre . '</br>';


echo gettype($numero);
?>