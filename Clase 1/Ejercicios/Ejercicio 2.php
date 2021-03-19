<h3> Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. </h3>

<?php

$day = date("j");
$month = date("n");

echo date("j.n.Y");
echo "</br>";
echo date("D j F Y");
echo "</br>";
echo date("j M y");
echo "</br>";
echo "</br>";

switch($month)
{
    case 1:
    case 2:
    case 3:
        if($day < 21)
        {
            echo "Es verano";
            break;
        }
        echo "Es otoño";
        break;
    case 4:
    case 5:
    case 6:
        if($day < 21)
        {
            echo "Es otoño";
            break;
        }
        echo "Es invierno";
        break;
    case 7:
    case 8:
    case 9:
        if($day < 21)
        {
            echo "Es invierno";
            break;
        }
        echo "Es primavera";
        break;
    case 10:
    case 11:
    case 12:
        if($day < 21)
        {
            echo "Es primavera";
            break;
        }        
    default:
        echo "Es verano";
        break;
}

?>