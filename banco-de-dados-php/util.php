<?php

function capturarDados(){

	system('clear');
	echo "Informe os dados do produto:\n";
	echo "Nome: ";
	$nome = trim(fgets(STDIN));
	echo "CONSICO: ";
	$consico = trim(fgets(STDIN));
	echo "N.C.M (Nomenclatura Comum do Mercosul)";
	$ncm = trim(fgets(STDIN));
	echo "Descricao: ";
	$descricao = trim(fgets(STDIN));
	
	//Retorna um retorna um vetor(array) numerico,
	//aqui especificamos apenas o valores e nao as chaves
	//return array($nome,$consico,$ncm,$descricao);

	//Retorna um vetor associativo (chave,valor);
	return array("nome"=>$nome,"consico"=>$consico,
			"ncm"=>$ncm,"descricao"=>$descricao);

}
//Exemplo de um funcao com parametro 'tipado' como array(vetor)
function processarDados(array $vetor){

}


function exibirDados(){


}




?>
