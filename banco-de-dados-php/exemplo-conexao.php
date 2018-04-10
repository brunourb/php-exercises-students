<?php

$host='localhost';
$user='root';
$pwd='123456';
$db = 'mercado';

$db = new PDO('mysql:host=localhost;dbname=mercado',$user, $pwd);
$stmt = $db->prepare("select * from produto");
$stmt->execute();

//Enquanto houve registro imprimi dados
//Os registros sÃo retornados como um array associativo,
//onde o nome do campo da tabela Ã© um Ãndice.
while($data = $stmt->fetch(PDO::FETCH_ASSOC)){ 
	print $data['id']."\n";
	print $data['nome']."\n";
	print $data['consico']."\n";
	print $data['ncm']."\n";
	print $data['descricao']."\n";
	print '-------------------'."\n";
     
}

//Com apenas esta linha voce traz todos os registros.
//$resultset = $stmt->fetchALL(PDO::FETCH_ASSOC);

//Mostra com detalhes a variavel $resultset com seus registros.
//print'<pre>';
//print_r($resultset);

//Uma vez que vocÃª tem todos os registros, vocÃª percorre o resultado
//e de forma manual imprimi linha por linha.
//count conta o tamanho do vetor
//http://php.net/manual/pt_BR/function.count.php
/*for($i=0;$i<count($resultset);$i++){
	echo $resultset[$i]['id']."\n";
	echo $resultset[$i]['nome']."\n";
	echo "---------------------\n";
}
*/
?>
