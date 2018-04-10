<?php

function calcularEquacaoSegundoGrau(){
        echo "Digite A:";
        $a = intval(trim(fgets(STDIN)));

        echo "Digite B:";
        $b = intval(trim(fgets(STDIN)));

        echo "Digite C:";
        $c = intval(trim(fgets(STDIN)));

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
