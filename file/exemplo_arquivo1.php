<?php
// Example 1
$lista_valores = "piece1@piece2@piece3@piece4@piece5@piece6";

//explode = faz a quebra de uma variavel dado um delimitador''':w'''
$vetor = explode("@", $lista_valores);
echo $vetor[0]."\n"; // piece1
echo $vetor[1]."\n"; // piece2

