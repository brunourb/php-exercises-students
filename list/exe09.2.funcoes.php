<?php

//Declaracao de variaveis globais;
$conta = "";
$tipo = 0;
$consumo = "";

function montaTelaCliente(){

	global $conta,$tipo,$consumo;

	echo "Digite conta do cliente: \t";
	$conta = trim(fgets(STDIN));

	echo "\nDigite o tipo do cliente:";
	echo "\n\t 1 - Residencial";
	echo "\n\t 2 - Comercial";
	echo "\n\t 3 - Industrial";
	echo "..........................:";
	$tipo = trim(fgets(STDIN));

	echo "Digite consumo de agua:\t";
	$consumo = trim(fgets(STDIN));
}

function calcularConsumo(){
	
	global $tipo,$consumo;

	switch($tipo){
		case "1":
			$valor = 5 + ($consumo*0.05);
			break;
		case "2":
	                if($consumo <=80){
                        	$valor = 500;
                	} //fim se
                		else {
                        		$valor = 500 + (($consumo-80)*0.25);
                		} //fim senao

			break;

		case "3":
                	if($consumo<=100){
                        	$valor = 800;
                	}
                	else {
                        	$valor = 800 + (($consumo-100)*0.04);
                	}
			break;

		default:

			echo "Opcao invalida";
			die("Fim programa");
			break;			
	}

	return $valor;
}

?>
