<?php
$students = ["sa","sb","sc"];
echo "<ul>";
foreach($students as $student){
    echo '<li>'.$student.'</li>';
}
echo "</ul>";


echo "<ul>";
$items = [
    "item1" => "Mobile",
    "item2" => "Charger",
    "item3" => "Cable"
];
foreach($items as $key => $value){
    echo "<li>$key : $value</li>";
}
echo "</ul>";

echo "<br><br><br>";


$cars = array(
    array(
        "name" => "volvo",
        "stock" => 25,
        "sold" => 15,
    ),
    array(
        "name" => "BMW",
        "stock" => 12,
        "sold" => 9,
    ),
    array(
        "name" => "Land Rover",
        "stock" => 8,
        "sold" => 3,
    )
);

// print_r($marks);

foreach($cars as $brand){
    foreach($brand as $key => $value){
        echo "$key : $value";
        echo "<br>";
    }
    echo "<br>";
}
?>