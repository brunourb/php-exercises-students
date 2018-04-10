<?php
// Lê um arquivo em um array.  Nesse exemplo nós obteremos o código fonte de
// uma URL via HTTP
$lines = file ('access.log');

// Percorre o array, mostrando o fonte HTML com numeração de linhas.
foreach ($lines as $line_num => $line) {
	$linha = explode(" ", trim($line));	
	var_dump($linha);die;
    //echo "Linha #{$line_num}: " . trim($line) . "\n";

}


//criar um noovo arquivo e imprimir(salvar) apenas as linhas pares;
?>
