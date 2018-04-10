<?php
/*
Formula: Xn+1 = (aXn + c) mod N
*/

//$formulaAnterior = 0;

for($x=0;$x<100;$x++){
	echo "Digite o valor de A:";
	$a = trim(fgets(STDIN));
	echo "Digite o valor C:";
	$c = trim(fgets(STDIN));
	echo "Digite o valor de N:";
	$n = trim(fgets(STDIN));

	//$formula = $formula+1;
	$formula+=($a*$x+$c) % $n;
	//$formulaAnterior
	echo "A: $a, C: $c, N: $n: $formula";
}

?>
