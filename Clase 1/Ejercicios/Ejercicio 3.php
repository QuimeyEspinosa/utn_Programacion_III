<h3>
Aplicación No 3 (Obtener el valor del medio)
Dadas tres variables numéricas de tipo entero $a, $b y $c realizar una aplicación que muestre
el contenido de aquella variable que contenga el valor que se encuentre en el medio de las tres
variables. De no existir dicho valor, mostrar un mensaje que indique lo sucedido.
Ejemplo 1: $a = 6; $b = 9; $c = 8; => se muestra 8.
Ejemplo 2: $a = 5; $b = 1; $c = 5; => se muestra un mensaje “No hay valor del medio”</h3>

<?php

$a = rand(1, 100);
$b = rand(1, 100);
$c = rand(1, 100);

$valorMedio = getValorMedio($a,$b,$c);

echo "Los valores son: <br> A=$a, B=$b, C=$c";
echo "<br><br>", $valorMedio;

function getValorMedio($a, $b, $c)
{
    $valMedio = 0;

    if(($a < $b && $a > $c) || ($a > $b && $a < $c))
    {
        $valMedio = "El valor medio es A=$a";
    }
    else if(($b < $a && $b > $c) || ($b > $a && $b < $c))
    {
        $valMedio = "El valor medio es B=$b";
    }
    else if(($c < $b && $c > $a) || ($c > $b && $c < $a))
    {
        $valMedio = "El valor medio es C=$c";
    }
    else if ($a == $b && $a == $c)
    {
        $valMedio = "El valor medio es A, B y C = $a";
    }
    else
    {
        $valMedio = "No existe valor medio";
    }

    return $valMedio;
}

?>