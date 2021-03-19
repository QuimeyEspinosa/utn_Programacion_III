<h3>Aplicación No 8 (Carga aleatoria)
Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';</h3>

<?php

$vec = array(1 => 90,
            30 => 7,
            'e'=> 99,
            'hola' => 'mundo');

foreach($vec as $item)
{
    echo "<br> $item";
}

?>