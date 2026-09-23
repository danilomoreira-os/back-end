<?php

$email = $_POST["email"];
$senha = $_POST["senha"];


if($email == "morerafps@hotmail.com" && $senha == "123456"){
    echo "Login bem sucedido!!!";
}
else{
    echo "Login ou senha invalida!!!";
}

?>