<h3> Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla. </h3>

<?php

$operador = 0;
$op1 = rand(1,100);
$op2 = rand(1,100);
$resultado = 0;

echo "op1 = $op1";
printf("<br>");
echo "op2 = $op2";
printf("<br>");
printf("<br>");

switch(rand(1,4))
{
    case 1:
        echo "Operador = +";
        printf("<br>");
        echo "El resultado de la suma es: ", $resultado = $op1 + $op2;
        break;

    case 2:
        echo "Operador = -";
        printf("<br>");
        echo "El resultado de la resta es: ", $resultado = $op1 - $op2;
        break;

    case 3:
        echo "Operador = /";
        printf("<br>");
        if($op2 == 0)
        {
            echo "No se puede dividir entre cero";
            break;
        }
        $resultado = $op1 / $op2;
        echo "El resultado de la division es: ", $resultado;
        break;

    case 4:
        echo "Operador = *";
        printf("<br>");
        echo "El resultado de la multiplicación es: ", $resultado = $op1 * $op2;
        break;
}

?>