<?php

$peso = 72;
$altura = 1.75;
$resultado = $peso/($altura * $altura);

echo "Peso: $peso";
echo "<br>";
echo "Altura: $altura";
echo "<br>";
echo "IMC: $resultado <br>";

if($resultado < 19){
    echo "Desnutrido";
}

elseif($resultado <= 24 && $resultado >= 19){
    echo "Peso ideal";
}
elseif($resultado <=30 && $resultado >= 25){
    echo "Sobrepeso";
}
elseif($resultado <=35 && $resultado >= 30){
    echo "Obesidade Grau 1";
}
elseif($resultado <=39 && $resultado >= 35){
    echo "Obesidade Grau 2";
}
elseif($resultado >= 40){
    echo "Obesidade Grau 3";
}
?>