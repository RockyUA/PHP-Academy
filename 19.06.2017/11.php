<?php
/* С помощью конструкции switch выведите фразу: "Это выходной день", если значение переменной
day попадает в диапазон чисел от 6 до 7 (включительно).*/

$day = 7;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день!";
        break;
    case 6:
    case 7:
        echo "Это выходной день!";
}