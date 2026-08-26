<?php

$nota1 = 8;
$nota2 = 6;
$frequencia = 91;
$media = ($nota1 + $nota2)/2;

echo "Media: $media";

if($media >= 6 && $frequencia >= 75 ){
    echo "<br> Aprovado";
}
else{
    echo "Reprovado";
}


?>