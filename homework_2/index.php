<?php
/*
Example 1

*Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. 
*Обязательно использовать оператор return. 
*/

// $getSum = fn(int|float|string $num1, int|float|string $num2) : int => $num1 + $num2;
// $getMinus = fn(int|float|string $num1, int|float|string $num2) : int => $num1 - $num2;
// $getUm = fn(int|float|string $num1, int|float|string $num2) : int => $num1 * $num2;

// function getDelen(int|float|string $num1, int|float|string $num2) : int {
//     if ($num2 == 0) {
//         echo "Ошибка! На ноль делить нельзя";
//     } else {
//         return $num1 / $num2;
//     }
// }

/*
*Example 2

*Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения 
*аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических 
*операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/

// function mathOperation($arg1, $arg2, $operation) {
//     $getSum = fn($num1, $num2) => $num1 + $num2;
//     $getMinus = fn($num1, $num2) => $num1 - $num2;
//     $getUm = fn($num1, $num2) => $num1 * $num2;

//     function getDelenie($num1, $num2) {
//         if ($num2 == 0) {
//             return "Ошибка! На ноль делить нельзя!";
//         } else {
//             return $num1 / $num2;
//         }
//     }

//     if ($operation == "+") {
//         echo $getSum($arg1, $arg2);
//     }

//     else if ($operation == "-") {
//         echo $getMinus($arg1, $arg2);
//     }

//     else if ($operation == "*") {
//         echo $getUm($arg1, $arg2);
//     }

//     else if ($operation == "/") {
//         echo getDelenie($arg1, $arg2);
//     }
// }

// echo mathOperation(3, 0, "/");

/* 
*Example 3

*Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями 
*городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким: 
*Московская область: Москва, Зеленоград, Клин 
*Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт 
*Рязанская область … (названия городов можно найти на maps.yandex.ru).
*/

// $arr = [
//     "Московская область" => [
//         "Москва,",
//         "Зеленоград,",
//         "Клин",
//     ],
//     "Ленинградская область" => [
//         "Санкт-Петербург,",
//         "Всеволожск,",
//         "Павловск,",
//         "Кронштадт",
//     ],
//     "Рязанская область" => [
//         "Рязань,",
//         "Рыбное,",
//         "Тума",
//     ]
// ];

// foreach ($arr as $key => $value) {
//     echo $key . ":" . " "; 

//     foreach ($value as $city) {
//         echo "{$city} ";
//     }   
//     echo PHP_EOL;
// }

/* 
*Example 4

*Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания
*(‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). Написать функцию транслитерации строк.
*/

// $alfabet = [
//     'а' => 'a',   'б' => 'b',   'в' => 'v',
//     'г' => 'g',   'д' => 'd',   'е' => 'e',
//     'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
//     'и' => 'i',   'й' => 'y',   'к' => 'k',
//     'л' => 'l',   'м' => 'm',   'н' => 'n',
//     'о' => 'o',   'п' => 'p',   'р' => 'r',
//     'с' => 's',   'т' => 't',   'у' => 'u',
//     'ф' => 'f',   'х' => 'h',   'ц' => 'c',
//     'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
//     'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
//     'э' => 'e',   'ю' => 'yu',  'я' => 'ya'
// ];

// $str = "Привет";
// $str = mb_strtolower($str);
// $str_arr = mb_str_split($str);

// function tranlateOn (array $string_array, array $alfabet) : string {
//     $new_str = "";

//     for ($i = 0; $i < count($string_array); $i++) { 
//         foreach ($alfabet as $key => $value) {
//             if ($string_array[$i] == $key) {
//                 $new_str .= $value;
//             } 
//         }  
//     }

//     return $new_str;
// }

// echo tranlateOn($str_arr, $alfabet);

/* 
*Example 5*

*С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, 
*$pow – степень.
*/

// function power($val, $pow) : int|float {
//     $total_sum = 0;
//     if ($pow == 1) {
//         return $val;
//     } else {
//         return $val * power($val, $pow - 1);
//     }
// }

// echo power(3, 3);