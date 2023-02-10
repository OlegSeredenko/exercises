/*На вход подаётся массив с числами и дополнитеьное число. Нужно отсортировать числа и найти то число в массиве, которое идет по счету от начала (дополнительное число)
Например для массива [7, 3, 5, 1] и числа 2 функция вернёт 3, так как если отсортировать массив [1, 3, 5, 7] на втором месте (не на индексе) будет число 3.
*/ 
<?php
function nthSmallest($arr, $n) {
	sort($arr);
	$flag = null;
	if ($n > count($arr)) {
	    return $flag;
	}
	if ($arr[$n-1]) {
	    $flag = $arr[$n-1];
	}
	return $flag;
}
?>