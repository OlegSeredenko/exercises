//дано число, необходимо найти сумму всех чисел от 1 до этого числа, возведенных в степень (на то же число). Например если дается число 3, то 
// (1 ** 1) + (2 ** 2) + (3 ** 3) = 1 + 4 + 27 = 32. Функция вернёт 32.
<?php
function findSum($n) {
    $arr = range(1, $n);
    $sum = 0;
    foreach ($arr as $value) {
        $sum = $sum + ($value ** $value);    
    }
    return $sum;
}
?>