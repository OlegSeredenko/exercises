/*На вход подаётся два числа. Необходимо найти сумму все цифр всех чисел в диапазоне этих чисел. Например если на входе у нас два числа 19 и 22, то значит нам нужна сумма цифр
из чисел 19, 20, 21, 22, а это (1 + 9) + (2 + 0) + (2 + 1) + (2 + 2) = 19. Функция вернёт 19
*/ 
<?php
function sumDigits($a, $b) {
	$arr = range($a, $b);
	$sum = 0;
	foreach ($arr as $value) {
		$x = (string)$value;
		for($i = 0; $i < strlen($x); $i++) {
			$sum = $sum + (int)$x[$i];
		}
	}
	return $sum;
}
?>