<?php

echo "Menu<br>";
echo "1.Pizza<br>";
echo "2.Hamburguer<br>";
echo "3.Refrigerante<br>";
echo "4.Sobremesa<br>";
echo "5.Sair<br><br>";
echo "---------------------------------<br><br>";


$escolha = 3;

switch($escolha){
    case 1: 
        echo "Sabores de Pizza<br>";
        echo "Calabresa<br>";
        echo "Quatro queijos<br>";
        echo "Palmito<br>";
        break;
    case 2:
        echo "Sabores de Hamburguer<br>";
        echo "X-Burguer<br>";
        echo "X-Salada<br>";
        echo "X-Bacon<br>";
        break;
    case 3:
        echo "Sabores de Refrigerante<br>";
        echo "Coca-Cola<br>"; 
        echo "Guaraná<br>";
        echo "Fanta<br>";
        break;
    case 4:
        echo "Sabores de Sobremesa<br>";
        echo "Sorvete<br>";
        echo "Pudim<br>";
        echo "Torta<br>";
        break;
    case 5:
        echo "Saindo do programa<br>";
        break;
}       

?>