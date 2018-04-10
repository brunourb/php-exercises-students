<?php


$vetor = file('xpto.txt');

//mostra o tipo da variavel e conteudo dela
//var_dump($vetor);

//Percorrendo o vetor com for
//count($variavel) = conta quantos registro tem na variavel
for($i=0;$i<count($vetor);$i++){
	echo $vetor[$i];
}




