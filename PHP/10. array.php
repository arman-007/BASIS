<pre>
<?php

$numbers = [1,2,3,4,5];

print_r($numbers);

echo "<br><br><br>";

foreach($numbers as $value){
    echo "value is ". $value . "<br>";
}
echo "<br><br><br>";

$salaries = ["mohammad" => 2000, "John" => 1000, "Zara" => 500];

echo "Salary of Mohammad is". $salaries['mohammad']. "<br>";
echo "Salary of John is". $salaries["John"]. "<br>";
echo "Salary of zara is". $salaries["Zara"]. "<br>";

echo "<br><br><br>";

foreach($salaries as $name => $salary){
    echo "The salary of ". $name . "is ". $salary. "<br>";
}

?>
</pre>