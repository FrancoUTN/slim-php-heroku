<?php
/******************************************************************************

Catania Franco

Aplicación Nº 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura ​for​) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta ​<br/>​). Repetir la impresión de los números utilizando
las estructuras ​while​ y ​foreach​.

*******************************************************************************/

for ($i = 0, $j = 1; $i < 10; $i++)
{    
    echo "<br>" . $impares[] = $j;

    $j += 2;
}

echo "<br><br>";


$contador = 0;

while ($contador < count($impares))
{
    echo $impares[$contador] . "<br>";
    $contador++;
}

echo "<br>";


foreach ($impares as $num)
    echo $num . "<br>";