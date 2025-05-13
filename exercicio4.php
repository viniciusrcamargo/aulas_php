<?php

$numeros = [1,2,4,6,8,19,21,45,77];
$pares = [];

for($i = 0; $i < count($numeros); $i++){
    if($numeros[$i] % 2 == 0){//número divido por 2 o resto é igual a 0
        $pares[] = $numeros[$i];
    }
}
echo 'Array de números pares' . PHP_EOL;
foreach($pares as $par){
    echo $par . PHP_EOL;
}

