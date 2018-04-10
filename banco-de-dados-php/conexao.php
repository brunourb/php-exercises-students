<?php

function conectaBanco($host='localhost',
		      $db='mercado',
		      $user='root',$pwd='123456'){
/*echo $host."\n";
echo $db."\n";
echo $user."\n";
echo $pwd."\n";
*/
$db = new PDO('mysql:host='.$host.';dbname='.$db,$user, $pwd);

return $db;
}

function insert($db, array $vetor){

	$stmt = $db->prepare("INSERT INTO produto (nome,consico,ncm,descricao) 
	VALUES (:nome,:consico,:ncm,:descricao)");

	//http://php.net/manual/pt_BR/pdo.constants.php
	$stmt->bindParam(':nome',$vetor['nome'],PDO::PARAM_STR);
	$stmt->bindParam(':consico',$vetor['consico'],PDO::PARAM_INT);
	$stmt->bindParam(':ncm',$vetor['ncm'],PDO::PARAM_INT);
	$stmt->bindParam(':descricao',$vetor['descricao'],PDO::PARAM_STR);

	return $stmt;

	/*return "INSERT INTO produto (nome,consico,ncm,descricao) 
	VALUES ('{$vetor['nome']}',{$vetor['consico']},{$vetor['ncm']}
	,'{$vetor['descricao']}')";
*/
}

?>
