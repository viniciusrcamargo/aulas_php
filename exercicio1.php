<?php
//                 0        1       2           3
$listaCompras = ['Arroz', 'Café', 'Óleo', 'Pasta de dentes', 'Morango', 'Bacon', 'Leite'];//4

for($i = 0; $i < count($listaCompras); $i++){
    echo 'Item da compra ' . $listaCompras[$i]. PHP_EOL;
}
