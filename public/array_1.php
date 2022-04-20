<?php
// задача_массивы
function vardump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}
$firstArray = [];

for ($i = 0; $i < 10; $i++) {
    $firstArray[] = rand(-10, 25);
}
var_dump($firstArray);                                                      
// asort($firstArray);                                                      //Сортировка
// echo '<br> По возрастанию: <br>';
// var_dump($firstArray);

// for ($i = 0; $i < count($firstArray) - 1; $i++){        
//     for ($j = 0; $j < count($firstArray) - $i - 1; $j++){
//         if ($firstArray[$j] > $firstArray[($j + 1)]){
//             $tmp_var = $firstArray[$j + 1];
//             $firstArray[$j + 1] = $firstArray[$j];
//             $firstArray[$j] = $tmp_var;            
//         }                
//     }
// }
// echo '<br> Без использования функций: <br>';
// var_dump($firstArray);

$count = count($firstArray);                                                        //filter
for ($k = 0; $k < $count; $k++) {
    if ($firstArray[$k] < 0) {
        unset($firstArray[$k]);
    }
}
echo '<br> Удалены минусы: <br>';
var_dump($firstArray);

$arrayCount = array_count_values($firstArray);
$secondArray = [];
foreach ($arrayCount as $k=>$v){                                                //Запись во 2 массив
    if ($v > 1 ) { 
        $secondArray[] = $k;        
    }    
}
$second = array_unique($secondArray);                                          // Удаление повтор.элементов
$first = array_unique($firstArray);                                                     

echo '<br>Копии во втором массиве <br>';
var_dump($second);
echo '<br>Первый массив после удаления повторов и отрицательных чисел.<br>';
var_dump($first);
