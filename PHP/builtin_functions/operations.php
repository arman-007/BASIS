<?php
$x = 10;
$y = 2;

echo($x + $y)."<br>";
echo($x - $y)."<br>";
echo($x * $y)."<br>";
echo($x / $y)."<br>";

$a = 20;
$a += 5;
echo $a."<br>";
$a = 20;
$a -= 5;
echo $a."<br>";
$a = 20;
$a *= 5;
echo $a."<br>";
$a = 20;
$a /= 5;
echo $a."<br>";
$a = 20;
$a %= 3;
echo $a."<br>";
echo "<br>";

$x = 10;
$y = 2;
$z = "10";

var_dump($x == $z);
echo "<br>";
var_dump($x === $z);//both value and datatype have to be same
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $z);
echo "<br>";

$x=10;
echo ++$x."<br>";
$x=10;
echo $x++."<br>";
$x=10;
echo --$x."<br>";
$x=10;
echo $x--."<br>";
?>