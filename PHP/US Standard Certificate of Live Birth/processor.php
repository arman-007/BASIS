<pre>
    <?php
print_r($_POST);  

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    $fname = null;
    $mname = null;
    $lname = null;
    $suffix = null;
    $DOB = null;
    // $age = null;

    if(array_key_exists('motherCurrentFirstName', $_POST)){
        $fname = $_POST['motherCurrentFirstName'];
        // echo $fname;
    }
    if(array_key_exists('motherCurrentMiddleName', $_POST)){
        $mname = $_POST['motherCurrentMiddleName'];
        // echo $fname;
    }
    if(array_key_exists('motherCurrentLastName', $_POST)){
        $lname = $_POST['motherCurrentLastName'];
        // echo $fname;
    }
    if(array_key_exists('motherCurrentSuffix', $_POST)){
        $suffix = $_POST['motherCurrentSuffix'];
        // echo $fname;
    }
    if(array_key_exists('motherDOB', $_POST)){
        $DOB = $_POST['motherDOB'];
        // echo $fname;
        // $presentDate = date();
        // // echo $presentDate;
        // echo date_diff($_POST['motherDOB'], $DOB);
        // // echo $age;
    }

    echo "Full Mother's Name: ".$fname." ".$mname. " " .$lname. " " .$suffix."<br>";
    echo "Date of Birth: ".$DOB. "<br>";
    echo "Mother's Name Prior to First Marriage: ".$_POST['motherPreviousFirstName']." ".$_POST['motherPreviousMiddleName']." ".$_POST['motherPreviousLastName']." ".$_POST['motherPreviousSuffix'];
    echo "<br>Birthplace: ".$_POST['motherBirthPlace']."<br>";
}
?>
</pre>