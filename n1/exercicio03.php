<?php
/*
Em um jogo de adivinhação, o jogador deve descobrir uXPTO entre 1 e 10 usando até trêtentativas. 
A cada tentativa o jogador é informado se oXPTO foi descoberto, ou se ele é maior ou
menor do que a tentativa. Se após três tentativas o jogador não descobrir o número, então ele perde
o jogo. Faça um algoritmo que implemente esse jogo.

*/

system("clear");

$condicao = true;

do{

	$numeroMagico = rand(1,10);

	for($i=0;$i<3;$i++){
		echo "Digite o numero a ser descoberto:";
		$numero = trim(fgets(STDIN));
		if($numero == $numeroMagico){
			echo "Acertou!\n";
			$condicao=false;
			break;
		}

		if($numero>$numeroMagico){
			echo "Numero informado eh que o numero magico"; 
		}
		else {
			echo "Numero eh menor que o numero magico";
		}
	}
}while($condicao);

echo "Fim de jogo";

?>
