<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$media = 0;

for($i = 0; $i < count($array);$i++ ){
    $media += $array[$i];
}

echo "sua Media é ". $media / 10;
?>