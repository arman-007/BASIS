<pre>
<?php
$search_array = array(
    'first' => 1,
    'second' => 4
);

if (array_key_exists('first', $search_array)){
    echo "Value found in array";
}
else{
    echo "Value not found in array";
}

echo"<br>";

if (array_key_exists('last', $search_array)){
    echo "Value found in array";
}
else{
    echo "Value not found in array";
}

echo"<br>";
echo"<br>";
echo"<br>";

echo array_key_first($search_array);
echo"<br>";
echo array_key_last($search_array);

echo"<br>";
echo"<br>";
echo"<br>";
print_r( array_keys($search_array));
?>
</pre>