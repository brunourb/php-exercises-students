<?php
//C.R.U.D
//create | read | update | delete
//
//
$stream = null;

do{
	system("clear");
	echo "Informe nome ou zero<0> para sair: ";
	$nome = trim(fgets(STDIN));

	if($nome!="1"){
		$stream = fopen("pessoas.txt","a");
		fwrite($stream,$nome."\n");
		fclose($stream);
	}
}while($nome!="1");





