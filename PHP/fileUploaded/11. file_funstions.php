<?php

//read file contents
$file_content = file_get_contents('sample.txt');

echo $file_content;

//create file
file_put_contents('aSampleFile.txt', "Hello! It's me. I've been wondering...");