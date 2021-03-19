<h3>Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.</h3>

<?php

$lapicera1 = array("color" => "azul",
"marca" => "maped",
"trazo"=> "medio",
"precio" => 50);

$lapicera2 = array("color" => "rojo",
"marca" => "maped",
"trazo"=> "fino",
"precio" => 70);

$lapicera3 = array("color" => "verde",
"marca" => "faber castell",
"trazo"=> "medio",
"precio" => 38);

echo "Lapicera 1<br>";
mostrarLapicera($lapicera1);
echo "<br>";
echo "Lapicera 2<br>";
mostrarLapicera($lapicera2);
echo "<br>";
echo "Lapicera 3<br>";
mostrarLapicera($lapicera3);
echo "<br>";

function mostrarLapicera($vec)
{
    foreach($vec as $item)
    {
        echo "$item <br>";
    }
}

?>