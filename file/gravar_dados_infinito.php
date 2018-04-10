<?php


while(true){
	$stream = fopen("dados.txt","a+");
	fwrite($stream,file_get_contents("dados.txt"));
	fclose($stream);
}
