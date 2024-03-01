<?php
$limite = 30;
$a=0; 
$b=1; 
$aux;

echo "serie fibonacci \n"; 
for ($i=0; $i < $limite; $i++){
    $aux = $a; 
    $a = $b; 
    $b = $aux + $a; 
    echo " -- $a \n"; 
}
?>