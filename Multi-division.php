/*На вход подается три числа. необходимо сложит число ($a) $b-раз и узнать делится ли это число $c на без остатка. Например для 42, 5, 10 функция вернёт false, так как
42+42 = 84, 84+84 = 168, 168+168 = 336, 336+336 = 672, 672+672 = 1344
1344 is not divisible by 10
*/
<?php
function abcmath($a, $b, $c) {
	$count = 0;
	$sum = $a;
	while ($count < $b) {
		$count = $count + 1;
		$sum = $sum + $sum;
	}
	return ($sum % $c == 0) ? true : false;
}
?>