<?php

function analisarVenda($produto, $custo, $venda){
    $lucro = $venda -  $custo;

    if($lucro <= 0){
        $mensagem = "Prejuizo!!!";
    }
    elseif($lucro <+ 20){
        $mensagem = "Lucro baixo, mas vale a pena";
    }
    else{
        $mensagem = "Lucro alto! Investe!!!";
    }
    echo "Produto:  $produto <br>";
    echo "Lucro:  $lucro <br>";
    echo "Analise:  $mensagem <br>";
}
analisarVenda("Camiseta", 40, 35);

?>