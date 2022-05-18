<?php

$str = 'Андрей 10.11.2012 Александр 04.05.2006 Сергей 07.08.2009 Павел 01.02.2003 Сергей 01.02.2003';

$exploded = explode(' ', $str);
$chunks = array_chunk($exploded, 2);
$data = array_column($chunks, 1, 0);

echo 'Разбивка по кускам <br>';
var_dump($exploded);
echo '<br><br>';

echo 'Разбивка по парам <br>';
var_dump($chunks);
echo '<br><br>';

echo 'Ключ - имя, дата - значение <br>';
var_dump($data);
echo '<br><br>';
foreach($data as $key => $value){
    $people[] = array('name' => $key,
                        'age' => $value);
};
    
echo 'Многомерный массив с ключами name и age <br>';
var_dump($people);
echo '<br><br>';

$sortArray = array(); 

foreach($people as $person){ 
    foreach($person as $key=>$value){ 
        if(!isset($sortArray[$key])){ 
            $sortArray[$key] = array(); 
        } 
        $sortArray[$key][] = $value; 
    } 
} 

$orderby = 'age';
array_multisort($sortArray[$orderby],SORT_ASC,$people);

echo 'Сортировка по возрастанию по age <br>';
var_dump($people);
echo '<br><br>';


foreach($people as $person){
    foreach($person as $key => $value){        
        $born = new DateTime('');
        $age = $born->diff(new DateTime)->format('%y');
        if ($age >= 18){

        } else {

        }
    }
}
