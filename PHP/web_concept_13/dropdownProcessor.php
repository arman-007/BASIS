<pre>
    <?php

    print_r($_POST);

    if($_POST['division'] != 'select your division'){
        echo "Your selected division is ".$_POST['division'];
    }
    else{
        echo "You haven't entered any division";
    }


?>
</pre>