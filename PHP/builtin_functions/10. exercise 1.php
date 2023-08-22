<?php
    $human = array(
        'name' => 'John Doe',
        'age' => 21,
        'email' => 'johndoe@gmial.com'
    );

    if(is_array($human)){
        if(isset($human['name']) && $human['age']){
            echo "Name : ". $human['name']. "<br>";
            echo "Age : ". $human['age']. "<br>";
        }
    }
?>