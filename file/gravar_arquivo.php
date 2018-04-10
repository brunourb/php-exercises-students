<?php

$stream = fopen("xpto.txt","a");
fwrite($stream,"\nTeste A(Abre somente para escrita)");
//var_dump($stream);
fclose($stream);
