<?php 


echo "Caixa Eletrônico - Itaú <br>";
echo "1 - Consulta saldo, 2 - Fazer saque, 3 - Fazer depósito, 4 - Ver extrato, 5 - Sair <br>";

$opcao = 4;

switch($opcao){
    case 1:
        echo "Seu SALDO É R$ 650,01";
        break;
    case 2:
        echo "Qual valor?";
        break;
    case 3:
        echo "Valor do depósito";
        break;
    case 4:
        echo "- R$ 200 <br>";
        echo "+ R$ 175 <br>";
        echo "+ R$ 50 <br>";
        break;
    case 5:
        echo "Sair";
        break;
}





?>