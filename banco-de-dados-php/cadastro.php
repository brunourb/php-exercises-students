<?php
require_once('conexao.php');
require_once('util.php');

$db = conectaBanco();

$stmt = insert($db,capturarDados());
$stmt->execute();

//Enquanto houve registro imprimi dados
//Os registros sao retornados como um array associati
//onde o nome do campo da tabela é umindice.
while($data = $stmt->fetch(PDO::FETCH_ASSOC)){
        print $data['id']."\n";
        print $data['nome']."\n";
        print $data['consico']."\n";
        print $data['ncm']."\n";
        print $data['descricao']."\n";
        print '-------------------'."\n";
}



?>
