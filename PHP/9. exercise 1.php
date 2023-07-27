<pre>
<?php
echo "<h4>Example of empty()</h4>";

$name = "john";

//empty()
if (empty($name)){
    echo "The is no name.";
}
else{
    echo "Name variable is not empty and name is {$name}";
}

echo"<br>";
echo"<br>";
echo"<br>";

//is_array()
echo "<h4>Example of is_array()</h4>";
$name = array('john', 'Ron');
if (is_array($name)){
    echo "This is an array";
}
else{
    echo "Not an array";
}

echo"<br>";
echo"<br>";
echo"<br>";

//is_null()
echo "<h4>Example of is_null()</h4>";
$var = '';
echo is_null($var) ? "Null" : "Not NULL";

echo"<br>";
echo"<br>";
echo"<br>";

//isset()
echo "<h4>Example of isset()</h4>";
$var = '';
echo isset($var) ? "the variable is set" : "the variable is not set";


//print_r
echo"<br>";
echo"<br>";
echo"<br>";
echo "<h4>Example of print_r</h4>";
$name = array('john', 'Ron');

print_r($name);

//serialize
echo"<br>";
echo"<br>";
echo"<br>";
echo "<h4>Example of serializer</h4>";
$name = array('john', 'Ron');

echo serialize($name);


//var_dump()
echo"<br>";
echo"<br>";
echo"<br>";
echo "<h4>Example of var_dump()</h4>";
$name = array('john', 'Ron');

var_dump($name);


//isset()
echo"<br>";
echo"<br>";
echo"<br>";
echo "<h4>Example of isset()</h4>";
$info = array(
    'John' => 32,
    'Ron' => 40
);
echo array_key_exists('Ron', $info) ? "the key exists" : "the key doesn/'t exists";

?>
</pre>
<pre>
    <?php
        { }
    ?>
</pre>