<pre>
    <?php

    print_r($_POST);
    // echo $_POST['hobbies'][0];
    $hobbies = null;
    $total_hobbies = 0;

    if(array_key_exists('hobbies', $_POST)){
        $hobbies = $_POST['hobbies'];
        // echo count($hobbies);
    }
    
    if(is_null($hobbies)){
        echo "You haven't added any hobby :( ";
        return;
    }

    if(count($hobbies) == 1){
        echo "You have only one hobby, that is ".strtoupper($hobbies[0]). ".";
    }
    
    if(count($hobbies) > 1){
        echo "Your hobbies are ".implode(", ",$hobbies). ".";
    }

?>
</pre>