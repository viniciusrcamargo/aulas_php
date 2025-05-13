<?php
$arrays = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10,11];
$media = 0;

for($i = 0; $i < count($arrays);$i++ ){
    $media += $arrays[$i];
}

echo "sua Media é ". $media / 10;
?>