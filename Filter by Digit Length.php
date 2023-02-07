/*На вход подаётся массив с числами и необходимая длина (длина каждого элемента, если бы они были строками), необходимо вернуть только те элементы, 
которые соответсвуют необходимой длине
Например для для массива [88, 232, 4, 9721, 555] и указанной длины "3" функция вернёт [232, 555]
*/ 
<?php
function filterDigitLength($arr, $num) {
	$new_arr = [];
	foreach ($arr as $value) {
		$x = (string)$value;
		if (strlen($x) == $num) {
			$new_arr[] = $value;
		}
	}
	return $new_arr;
}
?>