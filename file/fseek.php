<?php

$stream = fopen("fseek.txt","a+");
fseek($stream,100);
fwrite($stream,"exemplo fseek");
fclose($stream);
