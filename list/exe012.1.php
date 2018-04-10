<?php

$vetor = array();
#$matriz = array(array());


system('clear');
sleep(2);

echo "Valor pagamento:";
$etiqueta = trim(fgets(STDIN));

$tipoPagamento = 0;

function escolhaTipoPagamento(){
system('clear');
echo "Digite a forma de pagamento";
echo "\n\t 1 - A vista, dinheiro ou cheque, 10% de desconto";
echo "\n\t 2 - A vista, cartão de credito, 5% de descont";
echo "\n\t 3 - Em 2 vezes, preço normal da etiqueta sem juro";
echo "\n\t 4 - Em 3 vezes, preço normal da etiqueta + 10% de juo:\n";
global $tipoPagamento;
$tipoPagamento = trim(fgets(STDIN));

}

escolhaTipoPagamento();

$valorCompra = 0;

while(validarEntrada($tipoPagamento)){
switch($tipoPagamento){
	case "1":
		$valorCompra = $etiqueta*0.9;
		//$valorCompra = $etiqueta - ($etiqueta*0.1);
		break;
	case "2":
		$valorCompra = $etiqueta*0.95;
		//$valorCompra = $etiqueta - ($etiqueta*0.05);
		break;

	case "3":
		$vetor["parcela"] = $etiqueta/2;
		$vetor["totalCompra"] = $vetor["parcela"]*2;
		#$valorCompra = $etiqueta;
		break;
	
	case "4":
		$etiqueta = $etiqueta*1.10;

		$vetor["parcela"] = $etiqueta/3;
		$vetor["totalCompra"] = $vetor["parcela"]*3;
		break;

	default:
		echo "Opcao Invalida\n\n";
		sleep(2); 
		escolhaTipoPagamento();
		break;
}

}

//system('clear');
//sleep(2);

echo "Valor compra: {$vetor["totalCompra"]}\n";
echo "Valor parcela: {$vetor['parcela']}\n";
echo "Tipo de pagamento escolhido eh: $tipoPagamento\n";
//sleep(2);
//system('clear');
print_r($vetor);

function validarEntrada($valor){
	return !($valor > 0 && $valor < 5);
}


?>
