<?php
//Exercicio 01


/*
comentario de bloco

Fazer um algoritmo que calcule a média aritmética das 3 notas de ualuno e mostre, além do valor da média do aluno, ummensagem de "Aprovado", caso a média seja igual ou superior a 6, ou a mensagem "reprovado", aso contrário.

Utilizada a funcao trim http://php.net/manual/pt_BR/function.trim.php
Para limpar valores vazios no inicio e final de uma string.
*/

echo "Olá aluno! Digite os valores a seguir\n";
sleep(3);
echo "\tNota 01: ";
$nota01 = trim(fgets(STDIN));

var_dump($nota01);die;


echo "\n\tNota 02: ";
$nota02 = trim(fgets(STDIN));

echo "\n\tNota 03: ";
$nota03 = trim(fgets(STDIN));


$media = ($nota01+$nota02+$nota03)/3;

if($media >=60){
	echo "\nAprovado!\n";
}
else {
	echo "\nReprovado!\n";
}

?>
