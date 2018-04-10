<?php

function validarVetorNumerico(){
//Voce pode declarar vetor assim:
$vetor = array();
// ou $vetor = [];

//Laco de repeticao em php (for)
for($i=0;$i<10;$i++){
	$vetor[]=$i; 
	//$vetor[$i] = $i;
}

return $vetor;

}

function validarVetorIndiceAlfaNumerico(){
	$vetor = array();
	
	for($i=0;$i<10;$i++){
		$vetor["a".$i] = $i;
	}

	return $vetor;

}

function teste(){

	$a = array();
	//$a = [1,2,3,4,5,6]; #indice numericos
	$a = ["posicao_0" => 1,"ads5"=>2,"teste"=>3]; #indices alfanumericos

	$b = [];
	$b[]="teste";
	$b[]=2;
	$b[]=3;

	return $b;

}

$vetor = validarVetorNumerico();
print_r($vetor);

$vetor = validarVetorIndiceAlfaNumerico();
print_r($vetor);
/*echo $vetor['posicao_0']."\n";
echo $vetor["teste"]."\n";
*/

?>
