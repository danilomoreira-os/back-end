<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$num = $_POST["num"];

if($num == 1){
    echo"Seu agendamento é: Corte R$30,00";
}
elseif($num ==2){
    echo"Seu agendamento é: Barba R$20,00";
}
elseif($num ==3){
    echo"Seu agendamento é: corte + barba 45,00";
}
else{
    echo"Serviço não encontrado";
}

?>