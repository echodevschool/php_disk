<?php
$str = 'Андрей 10.11.2012 Александр 04.05.2006 Сергей 07.08.2009 Павел 01.02.2003 Сергей 01.02.2003';

$explode = explode(' ', $str);

$date = [];
$name = [];
$key = 0;
// $strToArray = 1) Преобразовать ее в массив, элементы которого будут массивы с ключами name, age.
$strToArray = [];
foreach ($explode as $loopKey => $item) {
    if (isset($strToArray[$key]['age']) && isset($strToArray[$key]['name'])) {
        $key++;
    }
    if (DateTime::createFromFormat('d.m.Y', $item) !== false) {
        $strToArray[$key]['age'] = $item;
        $date[] = (new DateTime($item))->getTimestamp();
    } else {
        $name[] = $item;
        $strToArray[$key]['name'] = $item;
    }

}


asort($date);
$old = [];
$yang = [];
$newStr = '';
// 2) Отфильтровать по ключу age все элементы по возрастанию
// 3) Разбить массив на два массива по принципу: младше 18, старше 18
// 4) Вернуть все в строку
foreach ($date as $key => $timestamp) {
    $min = strtotime('+18 years', $timestamp);
    $newDate = date('d.m.Y', $timestamp);
    $tmp = [
        'age' => $newDate,
        'name' => $name[$key]
    ];
    $newStr .= $name[$key].' '.$newDate.' ';
    if(time() < $min)  {
        $yang[] = $tmp;
    } else {
        $old[] = $tmp;
    }
}