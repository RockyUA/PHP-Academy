<?php
/*<p>8. Расширьте конструкцию if из п.5-7, выводя фразу: "Неизвестный возраст" при условии, что значение переменной age
 является отрицательным числом, или вовсе ЧИСЛОМ НЕ ЯВЛЯЕТСЯ.</p>
*/
$age = sd;

if ((is_numeric($age)==false ) or ($age<0)){
    echo "Неизвестный возраст!";
}elseif ($age > 59){
    echo "Вам пора на пенсию!";
}elseif (0 <= $age) {
    echo "Вам еще рано работать!";
}elseif (18 <= $age & $age <= 59){
    echo "Вам еще работать и работать!";}