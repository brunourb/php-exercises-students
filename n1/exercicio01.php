<?php
/*
Exercicio 01
Faça um algoritmo que leia o nome e idade de 5 pessoas, e mostre o nome da pessoa mais velha

*/

system("clear");

$maiorIdade = -1;
$nomeMaiorIdade = "";

for($i=0;$i<5;$i++){
	echo "Digite nome:";
	$nome = trim(fgets(STDIN));
	echo "Digite idade:";
	$idade = trim(fgets(STDIN));1

	if($maiorIdade > $idade){
		$maiorIdade = $idade;
		$nomeMaiorIdade = $nome;
	}
}

echo "Nome: ".$nomeMaiorIdade;
echo "Idade: ".$maiorIdade;
