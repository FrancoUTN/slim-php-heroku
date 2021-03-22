<?php
/******************************************************************************

Catania Franco

Aplicación Nº 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función ​rand​). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.

*******************************************************************************/

$acumulador = 0;

for ($i = 0; $i < 5; $i++)
{
    $acumulador += $aleatorio = rand(1, 10);

    echo "<br>" . $enteros[] = $aleatorio;
}

echo "<br> <br>";

$promedio = $acumulador / count($enteros);

if ($promedio > 6)
    echo "El promedio de los números es mayor a";

else if ($promedio < 6)
    echo "El promedio de los números es menor a";

else
    echo "El promedio de los números es igual a";

echo " 6";