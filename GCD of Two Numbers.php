/*На вход поадется два числа, необходимо найти самый большой общий делитель для этих чисел. Например для (32, 8) это будет 8.
*/
<?php
function gcd($n1, $n2) 
{
	$mini = min($n1, $n2);
	$result = 0;
	for($i = 1; $i <= $mini; $i++) {
		if (($n1 % $i == 0) && ($n2 % $i == 0)) {
			$result = $i;
		}
	}
	return $result;
}
?>