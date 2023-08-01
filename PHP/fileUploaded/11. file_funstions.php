<?php

//read file contents
$file_content = file_get_contents('sample.txt');

echo $file_content;
echo "<br><br><br>";

//create file
file_put_contents('aSampleFile.txt', "Hello! It's me. I've been wondering...");

//file size
$file_size = filesize('Screenshot.png');
echo $file_size;
echo "<br><br><br>";

//file exists
echo file_exists('Screenshot.png') ? "File exists" : "File doesn't exist";
echo "<br><br><br>";

//delete file
if (file_exists('fileToDelete.txt')){
    unlink('fileToDelete.txt');
}