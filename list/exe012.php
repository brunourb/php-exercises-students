<?php

system('clear');
sleep(2);

echo "Valor pagamento:";
$etiqueta = trim(fgets(STDIN));

echo "Digite a forma de pagamento";
echo "\n\t 1 - A vista, dinheiro ou cheque, 10% de desconto";
echo "\n\t 2 - A vista, cartão de credito, 5% de descont";
echo "\n\t 3 - Em 2 vezes, preço normal da etiqueta sem juro";
echo "\n\t 4 - Em 3 vezes, preço normal da etiqueta + 10% de juo:\n";
$tipoPagamento = trim(fgets(STDIN));

$valorCompra = 0;

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
		$valorCompra = $etiqueta;
		break;
	
	case "4":
		$valorCompra = ($etiqueta*1.10);
		break;

	default:
		echo "Opcao Invalida";
		break;
}

system('clear');
sleep(2);

echo "Valor compra: $valorCompra\n";
echo "Tipo de pagamento escolhido eh: $tipoPagamento\n";

?>
