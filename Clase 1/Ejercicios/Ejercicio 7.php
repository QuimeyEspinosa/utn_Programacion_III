<h3>Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el salto de línea en HTML es la etiqueta /br). Repetir la impresión de los números utilizando
las estructuras while y foreach.</h3>

<?php

$impares = array(10);
$impares = cargarArrayImpares($impares);

echo "For";
echo "<br>";
mostrarFor($impares);
echo "<br>";
echo "While";
echo "<br>";
mostrarWhile($impares);
echo "<br>";
echo "Foreach";
echo "<br>";
mostrarForeach($impares);
echo "<br>";

function cargarArrayImpares($vec)
{
    $i = 0;

    while($i < 10)
    {
        $numImpar = rand(1, 10);
    
        if($numImpar % 2)
        {
            $vec[$i] = $numImpar;
            $i++;
        }    
    }

    return $vec;
}

function mostrarFor($vec)
{
    for($i = 0; $i < count($vec); $i++)
    {
        echo "$vec[$i] <br>";
    }
}

function mostrarWhile($vec)
{
    $i = 0;
    
    while($i < count($vec))
    {
        echo "$vec[$i] <br>";
        $i++;
    }
}

function mostrarForeach($vec)
{
    foreach($vec as $item)
    {
        echo "$item <br>";
    }
}

?>