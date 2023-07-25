<?php
echo "<h3>Example - 1</h3>";
$str = 'Hello text within single quote';
echo $str;
echo "<br>";
echo 'Hello text within single quote';

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 2</h3>";
$str1 = 'Hello text 
Multiple line
text within single quoted string';
echo $str1;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 3</h3>";
$str2 = 'using double "quote" directly inside single quoted string';
echo $str2;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 4</h3>";
$str3 = 'using escape sequence \n inside of single quote';
echo $str3;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 5</h3>";
$num1 = 10;
$str4 = 'trying variable $num1';
echo $str4;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 6</h3>";
$num2 = 10;
$str5 = "trying variable $num2";
echo $str5;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 7</h3>";
$num3 = 10;
$str6 = 'trying variable'.$num3;
echo $str6;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 9</h3>";
$my_school = "Motijheel Govt. Girls' High School";
echo $my_school;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h3>Example - 10</h3>";
$my_school = 'Motijheel Govt. Girls\' High School';
echo $my_school;
?>