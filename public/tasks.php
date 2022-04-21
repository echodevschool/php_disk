<?php
// string ex. 1

// $str = 'У лукоморья дуб зелёный; <br>
//     Златая цепь на дубе том: <br>
//     И днём и ночью кот учёный <br>
//     Всё ходит по цепи кругом; <br>';
// echo $str;

// $count = mb_substr_count($str, 'дуб');

// echo '<br> Количество дубов: ', $count;

// $delete = str_replace(':', '', $str);
// $deleteTwo = str_replace(';', '', $delete);

// echo '<br> Удаление знаков: <br>', $deleteTwo;

// $str = mb_strtoupper($str);

// echo '<br>Верхний регистр: <br>', $str;

//string ex. 2           

function checkPass()
{
    $pass = 'ssskkkmm2/';                                                                           //Условно полученный пароль
    $i = 0;
    $symbols = array('.', ',', '?', '!', '%', '"', '&', '-', '/', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    foreach ($symbols as $symbol) {
        if (substr_count($pass, $symbol) > 0) {            
            $i = $i + substr_count($pass, $symbol);            
        }
    }    

    if ((mb_strlen($pass) >= 10 and mb_strlen($pass) <= 25) and $i >= 2) {        
        echo 'Пароль подходит';                           
    } else{
        echo 'Пароль должен содержать от 10 до 25 символов.<br>Также должно быть не менее 2 символов из списка: ';        //Список писать стало лень
    }                                                                                                                     //Да и пользователю это надо как-то более кратко выводить
}
print_r(checkPass());
