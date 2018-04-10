<?php
#Desenvolver um algoritmo que leia um número inteiro e verifique se este é divisível por 5 e por 3 ao mesmoempo.

#http://php.net/manual/pt_BR/function.is-int.php
function verificarNumeroInteiro($numero){
	return is_int($numero);
}

function divisivel5($numero){
	return ($numero % 5 == 0);
}

function divisivel3($numero){
	return ($numero % 3 == 0);
}

function validar($numero){
	return divisivel5($numero) && divisivel3($numero);
}


?>
