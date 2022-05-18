<?php

$str = 'Количество: 501, Единицы измерения: мл, Единицы En: ml, Цена: 521, Количество: 331, Единицы измерения: мл, Единицы En: ml, Цена: 391';

$array =[];
$comma = strtok($str, ',:');

while ($comma !== false){
    $array[] = $comma;
    $comma = strtok(',:');    
}

$chunks = array_chunk($array, 8);


var_dump($array);
echo '<br><br>';

var_dump($chunks);
echo '<br><br>';

var_dump($comma);
echo '<br><br>'; 
