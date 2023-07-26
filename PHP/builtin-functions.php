<?php
echo "<h1>Exmaples of built in empty() function</h1>";

echo "<h4>Exmaples - 1</h4>";
$var = 0;
if (empty($var)){
    echo '$var is empty'."<br>";
}

echo "<h4>Exmaples - 2</h4>";
$var = '';
if (empty($var)){
    echo '$var is empty'."<br>";
}

echo "<h4>Exmaples - 3</h4>";
$var;
if (empty($var)){
    echo '$var is empty'."<br>";
}

echo "<h4>Exmaples - 4</h4>";
$var = '123';
if (empty($var)){
    echo '$var is empty'."<br>";
}
else{
    echo '$var is not empty'."<br>";
}

echo "<h4>Exmaples - 5</h4>";
$var = false;
if (empty($var)){
    echo '$var is assigned "false". Thus showing empty'."<br>";
}

echo "<h4>Exmaples - 6</h4>";
$var = null;
if (empty($var)){
    echo '$var is assigned "NULL". Thus showing empty'."<br>";
}

echo "<h1>Exmaples of built in is_array() function</h1>";
echo "<h4>Exmaples - 1</h4>";
$students = array("safi","kafi",'rafi');
echo is_array($students) ? "Array" : "Not Array";
echo "<br>";

echo "<h4>Exmaples - 2</h4>";
$students = 'This is a string';
echo is_array($students) ? "Array" : "Not Array";
echo "<br>";
echo "<br>";

echo "<h1>Exmaples of built in is_null() function</h1>";
echo "<h4>Exmaples - 1</h4>";
$value = null;
echo is_null($value) ? "NULL" : "Not NULL";
echo "<br>";

echo "<h4>Exmaples - 2</h4>";
$value = 0;
echo is_array($value) ? "NULL" : "Not NULL";
echo "<br>";
echo "<br>";

echo "<h1>Exmaples of built in is_set() function</h1>";
echo "<h4>Exmaples - 1</h4>";
$value = '';
echo isset($value) ? "set" : "Not set";
echo "<br>";

echo "<h4>Exmaples - 2</h4>";
$value1;
echo isset($value1) ? "set" : "Not set";
echo "<br>";
echo "<br>";

?>