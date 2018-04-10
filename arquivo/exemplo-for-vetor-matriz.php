<?php
$vetor = array(1,2,3,4,5,6,7,8,9,10);
$matriz = array(array(1,2,3),array(4,5,6),array(7,8,9));
//$matriz2 = array($vetor,$vetor1,$vetor2);

for($i=0;$i<count($vetor);$i++){
    echo $vetor[$i]."\n";
}

foreach($vetor as $qualquercoisa){
    echo $qualquercoisa."\n";
}

for($i=0;$i<count($matriz);$i++){
    for($j=0;$j<count($matriz[$i]);$j++){
        echo "matriz[$i][$j] = ". $matriz[$i][$j]."\n";
    }
}
echo "--------------\n";

foreach($matriz as $vetor){
   foreach($vetor as $valor){
       echo $valor."\n";
   }
}

?>
