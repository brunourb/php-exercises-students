<?php

$registros = file("xpto.txt");

foreach($registros as $chave=> $valor){
	if($chave==2){
		echo $chave." - ".$valor."\n";
		break; //parada forcada
	}
}
