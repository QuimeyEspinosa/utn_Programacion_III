<h3> Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple. </h3>

<?php

printf(date("d/n/y"));
printf("<br>");
printf(date("d/n/y"));

$dia = date("j");
$estacion = "";

switch(date("n"))
{
    case "1":        
        $estacion = "Verano";
        break;

    case "2":
        $estacion = "Verano";
        break;

    case "3":
        if($dia < 21)
        {
            $estacion = "Verano";
        }
        $estacion = "Otoño";
        break;

    case "4":
        $estacion = "Otoño";
        break;

    case "5":
        $estacion = "Otoño";
        break;

    case "6":
        if($dia < 21)
        {
            $estacion = "Otoño";
        }
        $estacion = "Invierno";
        break;

    case "7":
        $estacion = "Invierno";
        break;

    case "8":
        $estacion = "Invierno";
        break;

    case "9":
        if($dia < 21)
        {
            $estacion = "Invierno";
        }
        $estacion = "Primavera";
        break;
        
    case "10":
        $estacion = "Primavera";    
        break;

    case "11":
        $estacion = "Primavera";
        break;

    case "12":
        if($dia < 21)
        {
            $estacion = "Primavera";
        }
        $estacion = "Verano";
        break;
}

echo "<br> Estacion del año: ", $estacion;

?>