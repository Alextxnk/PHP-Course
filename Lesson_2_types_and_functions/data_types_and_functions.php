<?php
// ТИПЫ ДАННЫХ (простые и сложные) и ФУНКЦИИ

// ПРОСТЫЕ

$text = 'Glo Academy'; //string
$text; //NULL - переменной нет впринципе или ей не присвоено никакое знчение
echo gettype($text) . "<br>"; 

$number = 555; //integer
$number = '555'; //string
$number = 555.11; //double (еще называют его float)
echo gettype($number) . "<br>";

$bool = true; //boolean
echo gettype($bool) . "<br>";

var_dump((bool) $text) . "<br>"; //bool(true) - переменная существует и не равна нулю 

// СЛОЖНЫЕ ИЛИ СОСТАВНЫЕ ТИПЫ ДАННЫХ (объекты, массивы)

//Объект - это одно из базовых понятий ООП. Объект является экземпляром того или иного шаблона, того или иного класса   

class ForTest {}; // название классов пишется с больщой буквы
$objectTest = new ForTest(); // это объект класса ForTest
echo gettype($objectTest) . "<br>"; //object

//Массив - грубо переменная со множеством значений

$fruits = array('orange', 'apple', 'peach'); //создаем массив
$fruits = ['orange', 'apple', 'peach']; //второй вариант создания массива он короче и более предпочтительнее
echo gettype($fruits) . "<br>"; //array
// в PHP есть два типа массивов, которые различаются по способу идентификации элементов: простые и ассоциативные массивы  
echo $fruits[0] . "<br>"; // выводим orange
$fruits[3] = 'pineapple'; // добавление в массив нового элемнета
echo $fruits . "<br>"; // array
var_dump($fruits); // выводит значения массива 
echo "<br>";
print_r($fruits); // выводит значения массива немного по-другому (покороче)
echo "<br>";

// АССОЦИАТИВНЫЕ МАССИВЫ - это массивы у которых каждый элемент из пары: ключ, значение
$arr = ['dog' => 'Rex', 'cat' => 'Barsik']; //dog - ключ, Rex - значение
echo $arr['dog'] . "<br>"; // обращаемся не по индексам, а по ключам 

// ДВУМЕРНЫЕ МАССИВЫ 
$arrMany = [
   [1, 2, 3],
   ['apple', 'orange']
];
echo $arrMany[1][1] . "<br>"; 

// УСЛОВНЫЕ КОНСТРУКЦИИ (if, else if, else)

$name = 'Alex';
if ($name == 'Oleg') {
   echo 'Hi Oleg';
} else if ($name == 'Alex') {
   echo 'Hi Alex';
} else {
   echo 'Nothing';
}

// ТЕРНАРНЫЙ ОПЕРАТОР 
$text = $name == true ? 'Yes' : 'No'; // Yes - условие выполняется, в противном случае - No
echo $text . "<br>";

// КОНСТРУКЦИЯ SWITCH CASE 

$num = 3;
switch ($num) {
   case 1:
      echo 'Num = 1';
      break;
   case 2:
      echo 'Num = 2';
      break;
   case 3:
      echo 'Num = 3';
      break;
   default:
      echo 'Num not found';
      break;
} 

// ЦИКЛЫ

// Цикл позволяет выполнить определенное действие несколько раз, каждый проход цикла называется итерацией 

// WHILE - цикл с предусловием 

$num = 10;
while ($num < 15) {
   echo $num . "<br>";
   $num++;
} // остановимся на 14 

// DO WHILE - цикл с постусловием  

do {
   echo $num . "<br>";
} while ($num > 20); 

// FOR 

for ($i = 0; $i < 10; $i++) {
   echo $i . "<br>";
}

for ($i = 0; $i < 10; $i++) {
   if ($i == 3) {
      break; // досрочное завершение цикла 
   }
   echo $i . "<br>";
}

for ($i = 0; $i < 10; $i++) {
   if ($i == 3) {
      continue; // выведутся цифры кроме 3 
   }
   echo $i . "<br>";
} 

// ЦИКЛ FOREACH - цикл для перебора массивов

$arr = [1, 2, 3];
foreach ($arr as $value) {
   echo $value . "<br>";
}

foreach ($arr as $key => $value) {
   echo $key . ' ' . $value . "<br>";
}

$arr2 = ['dog' => 'Rex', 'cat' => 'Barsik'];
foreach ($arr2 as $key => $value) {
   echo $key . ' ' . $value . "<br>";
} 

// ФУНКЦИИ 

 hello(); // так же можно перед ней делать вызов 

function hello() 
{
   echo 'PHP' . "<br>";
}
hello(); // вызываем функцию (функцию можно вызывать неограниченное количество раз)
hello(); 

function calc($a, $b) 
{
   echo $a + $b . "<br>";
}
calc(3, 5); // передали параметры a и b в нашу функцию 

// функция может возврщать значение 

function ret($a = 3, $b = 5) 
{
   $c = $a * $b; //15
   return $c * 3; //45
}
$sum = ret();
echo $sum; //45