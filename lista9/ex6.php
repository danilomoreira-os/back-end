<?php

$musicas = ["Piss", "Hollow", "Live or Die", "Solitude", "Funeralopolis"];

$playlist = count($musicas);

echo "Musicas: ", $playlist;

foreach($musicas as $music){
    echo "<br>$music";
}
?>