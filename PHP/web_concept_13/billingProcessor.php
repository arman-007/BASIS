<pre>
    <?php
    print_r($_POST);
    
    if(array_key_exists('first_name', $_POST) && array_key_exists('last_name', $_POST)){
        echo "Your Full Name: ". $_POST['first_name']. " ".$_POST['last_name'];
    }
    
    if(array_key_exists('gender-toggle', $_POST)){
        echo "<br>Gender: ". $_POST['gender-toggle'];
    }

    if(!is_null($_POST['languages'])){
        echo "<br>Languages you know: ".implode(", ", $_POST['languages']);
    }

    if($_POST['division'] != ''){
        echo "<br>Your State: ".$_POST['division'];
    }
    else{
        echo "<br>You haven't entered any division";
    }


?>
</pre>