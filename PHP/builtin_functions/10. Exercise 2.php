<?php
$colors = ["Red", "Green", "Yellow"];
$fruits = ["Banana", "Apple", "Plum"];

foreach($colors as $color){
    foreach($fruits as $fruit){
        echo "This is a $color $fruit";
        echo "<br>";
    }
}


echo "<br><br><br>";
$arr = array(
    array(10,100,101),
    array(120,130,140),
    array(150,90,80)
);
$grandTotal =0;
$arr_sum = 0;
foreach($arr as $num_array){
    foreach($num_array as $num){
        $arr_sum += $num;
    }
    echo "$arr_sum<br>";
    $grandTotal += $arr_sum;
    $arr_sum = 0;
    
}
echo $grandTotal

?>