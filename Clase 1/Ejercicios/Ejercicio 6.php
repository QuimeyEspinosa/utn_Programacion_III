<h3>Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.</h3>

<?php

$vec = array(rand(1,10),
            rand(1,10),
            rand(1,10),
            rand(1,10),
            rand(1,10));

//echo var_dump($vec);

$promedio = 0;
$resultado = 0;
$mensaje = "";

foreach($vec as $item)
{
    $promedio += $item;
}

$resultado = $promedio / 5;

if($resultado > 6)
{
    $mensaje .= "Resultado = $resultado <br><br> El promedio es mayor a 6";
}
else if ($resultado < 6)
{
    $mensaje .= "Resultado = $resultado <br><br> El promedio es menor a 6";
}
else
{
    $mensaje .= "Resultado = $resultado <br><br> El promedio es igual a 6";
}

echo $mensaje;

?>