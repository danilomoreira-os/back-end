<?php

$usuario = "danilomoreira-mogger";
$idade = 12;

if($idade < 13){
    echo "Cadastro nao permitido! 🚓";
}
elseif($idade >= 13 && $idade < 16){
    echo "Só pode usar a plataforma com controle dos pais!";
}
else{
    echo "Plataforma liberada!!!";
}


?>