<?php
/**
<p>19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.</p>
*/
$a = '78';
$b = 78;
if ($a == $b) {
    echo "Равны";
}else{
    echo "Не равны";
}
echo '<br>';
var_dump($a);
echo '<br>';
var_dump($b);