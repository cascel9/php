<?php
$x=10;

echo "$x ----> Global <br>";


//usando função
function teste(){
    $x=50;
    echo "Local é $x";
}

teste();