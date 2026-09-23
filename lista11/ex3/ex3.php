<?php

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];

  echo "A média é: ", ($n1 + $n2 + $n3)/3;
echo "<br>";

if((($n1 + $n2 + $n3)/3) > 7){
    echo "Passou!";
}
else{
    echo "Reprovou!";
}

?>