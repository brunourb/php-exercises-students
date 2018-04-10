<?php

//declaracao a funcao
		  //calcular($valor1,$valor2,$operador);
function calcular($numero1,$numero2,$operador){

var_dump($numero1);die;

	switch($operador){
		case "+":
				return $numero1+$numero2;
				break;
		case "-":
				return $numero1-$numero2;
				break;
		case "*":
				return $numero1*$numero2;
				break;
		case "/":
				return $numero1/$numero2;
				break;

		default:
			echo "Operador invalido\n";
			echo "Programa encerrado.";
			break;

	}


}
//declaração de funcao
function imprimirDados($valor1,$valor2,$operador){
	return calcular($valor1,$valor2,$operador);

}
//var_dump($argv);die;

//execução da função
echo imprimirDados($argv[1],$argv[2],$argv[3]);


?>
