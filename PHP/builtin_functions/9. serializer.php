<?php
$language = array(array('Math', 'Language', 'Science'));
$serialized_data = serialize($language);
echo $serialized_data;

echo "<br>";

echo "<pre>";
echo var_dump(unserialize($serialized_data));
echo "</pre>";
?>