<?php
/*
Vamos criar 3 funcoes que:
1) Irá captura dados do usuario
2) Irá calcular a media do usuario
3) Iráimprimir o resultado no console.

As funcoes podem ter retorno ou nao. Caso a funcao tenha retorno
voce ira retornar um valor. Este valor pode ser qualquer coisa:
variavel, texto, numero,string, etc.
A funcao sem retorno chama-se "void".

Toda funcao tem uma assinatura. A assinatura de uma funcao eh composta pelo nome da funcao e seus parametros quando esta o possui.

Ex.:
#Funcao void
function NomeFuncao(){
	//bloco de comandos
} 

#Funcao com 3 parametros sem retorno. (void)
function imprimirDados($parametro1,$parametro2,$parametroN){
	//bloco de comandos
}

#Funcao com 3 parametros com retorno.
function imprimirDados($parametro1,$parametro2,$parametroN){
	//bloco de comandos
	return $valor; #Este valor pode ser qualquer coisa;
}

//Outro exemplo

Para DECLARAR uma funcao nao precisa do "ponto e virgula".
Para USAR/CHAMAR a funcao precisa de usar o "ponto e virgula", pois este e uso implica-se em uma instrucao.

ex: menu();

function menu(){
	carregarTela();
	enviarEmail();
	finalizarTela();
}

function carregarTela(){
	//bloco de comandos
}

function enviarEmail(){
	//bloco de comandos
}

function finalizarTela(){
	//bloco de comandos
}


*/


function capturarDados(){
	echo "\nInforme notas:\n";
	echo "\tN1: ";
	$n1 = trim(fgets(STDIN));
	echo "\tN2: ";
	$n2 = trim(fgets(STDIN));
	echo "\tN3: ";
	$n3 = trim(fgets(STDIN));

	echo imprimirDados(calcularMedia($n1,$n2,$n3));

}


function calcularMedia($n1,$n2,$n3){
	return ($n1+$n2+$n3)/3;
}


function imprimirDados($xxxxxxx){
	return "O valor da media eh: $xxxxxxx\n";
}
