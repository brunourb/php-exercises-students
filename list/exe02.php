<?php
require_once('func02.php');

#Valida se o numero é inteiro...
#recebe o numero passado como parametro para o script php

#php exe02.php 10

if(validar(intval($argv[1]))){
	echo "Exercicio deu certo...\n";
}
else {
	echo "Deu ruim...\n";
}

?>
