<h3>Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.</h3>

<?php

$asociativo = array("lapicera1" => $lapicera1 = array("color" => "azul",
                                        "marca" => "maped",
                                        "trazo"=> "medio",
                                        "precio" => 50),
                    "lapicera2" => $lapicera2 = array("color" => "rojo",
                                    "marca" => "maped",
                                    "trazo"=> "fino",
                                    "precio" => 70),
                    "lapicera3" => $lapicera3 = array("color" => "verde",
                                    "marca" => "faber castell",
                                    "trazo"=> "medio",
                                    "precio" => 38));

$indexado = array($lapicera1 = array("color" => "blanco",
                                "marca" => "honda",
                                "precio" => 500000),
                $lapicera2 = array("color" => "negro",
                                "marca" => "ford",
                                "precio" => 700000),
                $lapicera3 = array("color" => "azul",
                                "marca" => "chevrolet",
                                "precio" => 380000)
                );

echo "ASOCIATIVO";
echo "<br>";
mostrarArrayDeArray($asociativo);
echo "<br>";
echo "<br>";
echo "<br>";
echo "INDEXADO";
echo "<br>";
mostrarArrayDeArray($indexado);

function mostrarArrayDeArray($vec)
{
    foreach($vec as $vec2)
    {
        foreach($vec2 as $item)
        {
            echo "$item <br>";
        }
        echo "<br>";
    }
}

?>