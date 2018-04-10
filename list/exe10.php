<?php

//Evitar o PHPNotice
$acrescimo = 0;
$total = 0;
$total1 = 0;
$total2 = 0;

echo "Digite o preç da fita: ";
$precoFita = trim(fgets(STDIN));


echo "Digite a categoria da fita: ";
echo "\n\t1 - comum.";
echo "\n\t2 - lancamento.";
$categoria = trim(fgets(STDIN));

echo "Digite o dia da semana:";
echo "\n\tsegundas, terças e quintas 2,3 e 5) : desconto de 40% e relacao ao preco normal";
echo "\n\tquartas , sextas, sábados e domingo4,6,7,1): preco normal;";
$dia = trim(fgets(STDIN));

//Calcular e imprimir o preço final que será pago pela locaçã fita.
if($dia == 2 || $dia == 3 || $dia ==5){
	$precoFitaDesconto = $precoFita - ($precoFita*0.4);
	//$precoFita -=$precoFita*0.4;

	$total1 = $precoFitaDesconto;
}

if($categoria == 2){
	$acrescimo = $precoFita*0.15;
	//$total2 = ($precoFita + $acrescimo) - $precoFita;
}

//$total = $total1+$total2;
$total = $total1+$acrescimo;

echo "Preco locacao: {$total}\n";


?>
