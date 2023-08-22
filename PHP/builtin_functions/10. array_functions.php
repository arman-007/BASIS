<pre>
<?php
echo "<h4>Example of sizeof()</h4>";
$fruits = ["Orange", "Mango", "Banana"];
echo "Size of the array is: ".sizeof($fruits);

echo "<br><br><br>";

echo "<h4>Example of is_array()</h4>";
echo is_array($fruits) ? "Array" : "Not Array";

echo "<br><br><br>";

echo "<h4>Example of in_array()</h4>";
echo in_array("Banana", $fruits) ? "in array" : "Not in array";

echo "<br><br><br>";

echo "<h4>Example of array_merge & array_values()</h4>";
$hatchback = array(
    "Suzuki" => "Baleno",
    "Skoda" => "Fabia",
    "Hyundai" => "i20",
    "Tata" => "Tigor"
);
$friends = array("Vinod", "Javed", "Navjot", "Samuel");
$merged = array_merge($hatchback, $friends);
$merged_values = array_values($merged);
print_r($merged_values);


echo "<br><br><br>";

echo "<h4>Example of array_pop()</h4>";
$fruits = ["Orange", "Mango", "Banana"];
echo "Last element of the array is: ".array_pop($fruits);

echo "<br><br><br>";

echo "<h4>Example of array_push()</h4>";
array_push($fruits, "Grapes");
print_r($fruits);

echo "<br><br><br>";

echo "<h4>Example of array_shift()</h4>";
$a = array_shift($fruits);
echo $a;
print_r($fruits);

echo "<br><br><br>";

echo "<h4>Example of array_unshift()</h4>";
array_unshift($fruits, "Lichi");
print_r($fruits);


echo "<br><br><br>";

echo "<h4>Example of array_flip()</h4>";
$flipped_hatchback = array_flip($hatchback);
print_r($flipped_hatchback);

echo "<br><br><br>";

echo "<h4>Example of sort()</h4>";
$num = [1,2,6,4,9,3,74,6,64,654,54];

print_r(sort($num));


echo "<br><br><br>";

echo "<h4>Example of array_reverse()</h4>";
$reversed_num = array_reverse($num);
print_r($reversed_num);

?>
</pre>