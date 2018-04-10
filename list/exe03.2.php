<?php
function calcular2grau(){

        global $argv;

        $a = intval($argv[1]);
        $b = intval($argv[2]);
        $c = intval($argv[3]);

        printf("A: %d, B: %d , C: %d\n",$a,$b,$c);

	$delta = calcularDelta($a,$b,$c);

	if($delta > 0){
		$x1 = calcularX1($delta,$a,$b);
		$x2 = calcularX2($delta,$a,$b);

		echo "Temos x' e x''. Valores sÃo: $x1 e $x2\n";
	}
	else if($delta == 0){
		$x1 = calcularX1($delta,$a,$b);
		echo "Raiz unica.\n. X'="
	}else echo "Raizes inexistentes.\n";
}

function calcularDelta($a,$b,$c){
	return pow($b,2)-4*$a*$c;
}

function calcularX1($delta,$a,$b){
	return (-($b)+sqrt($delta))/(2*$a);
}

function calcularX2($delta,$a,$b){
        return (-($b)-sqrt($delta))/(2*$a);
}

calcularEquacaoSegundoGrau();

?>
