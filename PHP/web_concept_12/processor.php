<?php
$toggle = 'No';
print_r($_POST);

if(array_key_exists('toggle', $_POST)){
    if($_POST['toggle'] == 1){
        $toggle = 'Yes';
        echo $toggle;
    }
    else{
        echo $toggle;
    }
}


?>