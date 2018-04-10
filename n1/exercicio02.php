<?php
/*
Faça um algoritmo que descubra quando a funç�
f(x)= 2.x^3 +n^2 - n, se torna maior ou igual a 100.
*/

$resultado = 0;

do{

	system("clear");
	echo "Digite o valor de X:";
	$x = trim(fgets(STDIN));
	echo "Digite o valor de N:";
	$n = trim(fgets(STDIN));

	$resultado = 2*pow($x,3)+pow($n,2) - $n;

	$condicao = $resultado <100;
}while($condicao);

echo "\nResultado: $resultado\n";


