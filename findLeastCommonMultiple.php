/*Сделайте функцию, которое будет принимать 2 числа, а возвращать их НОК - 
наименьшее общее кратное. НОК двух чисел - это самое маленькое число, которое делится и на одно, и на второе число. 
Пример: числа 12 и 15 имеют НОК 60. Число 60 делится и на 12, и на 15 и это самое минимальное такое число.
*/
<?php
function findLeastCommonMultiple($a, $b)
{
    $i = 1;
    while (($i % $a != 0) || ($i % $b != 0)) {
        $i = $i + 1;
    }
    return $i;
}
?>