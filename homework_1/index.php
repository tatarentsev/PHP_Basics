<?php
// Задание 1. Выполните код в контейнере и объясните, что выведет данный код и почему:
$a = 5;
$b = '05';
var_dump($a == $b); // true - так как сравнение нестрогое
var_dump((int)'012345'); // 12345
var_dump((float)123.0 === (int)123.0); // false - так как сравнение строгое и оно учитывает типы данных
var_dump(0 == 'hello, world'); // false - так как int не может быть равным string


// Задание 2. В контейнере поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод?
// при смене версии с 8.2 на 7.4 вывод не поменялся

// Задание 3. Используя только две числовые переменные, поменяйте их значение местами. Например, если a = 1, b = 2, 
// надо, чтобы получилось: b = 1, a = 2. Дополнительные переменные, функции и конструкции типа list() использовать нельзя.

$a = 1;
$b = 2;
echo "a = {$b}, b = {$a}"
?>
