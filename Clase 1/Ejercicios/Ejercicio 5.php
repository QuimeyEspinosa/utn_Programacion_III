<h3>Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.
</h3>

<?php

$num = rand(20,60);
$nombre = "";

echo "$num <br><br>";

switch($num)
{
    case $num >= 20 && $num < 30:
        $nombre .= getUnidad($num, "veinte");
        break;

    case ($num >= 30 && $num < 40):    
        $nombre .= getUnidad($num, "treinta");
        break;

    case $num >= 40 && $num < 50:
        $nombre .= getUnidad($num, "cuarenta");
        break;

    case $num >= 50 && $num < 60:
        $nombre .= getUnidad($num, "cincuenta");
        break;

    case 60:
        $nombre .= "sesenta";
        break;

    default:
        $nombre .= "El número se encuentra fuera del rango solicitado";
        break;
}

function getUnidad($a, $b)
{
    $a = substr($a, 1);

    switch($a)
    {
        case 1:
            $b .= " y uno";
            break;
        case 2:
            $b .= " y dos";
            break;
        case 3:
            $b .= " y tres";
            break;
        case 4:
            $b .= " y cuatro";
            break;
        case 5:
            $b .= " y cinco";
            break;
        case 6:
            $b .= " y seis";
            break;
        case 7:
            $b .= " y siete";
            break;
        case 8:
            $b .= " y ocho";
            break;
        case 9:
            $b .= " y nueve";
            break;
    }

    return $b;
}

echo "$nombre";

?>