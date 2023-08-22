<pre>
<?php
$marks = array(
    "Mohammad" => array(
        "Physics" => 56,
        "Chemistry" => 67,
        "Biology" => 98,
    ),
    "John" => array(
        "Physics" => 56,
        "Chemistry" => 67,
        "Biology" => 98,
    ),
    "Zara" => array(
        "Physics" => 56,
        "Chemistry" => 67,
        "Biology" => 98,
        "Math" => 84,
    )
);

print_r($marks);

echo "Marks of Mohammad in Physics : ".$marks['Mohammad']['Physics'] . "<br>";

// for ($i=0; i< count($marks); $i++){
//     for($j = 0; $j < count($i); j++){
//         echo "Marks of ".$i. "in ".$j. "is";
//     }
// }

?>
</pre>