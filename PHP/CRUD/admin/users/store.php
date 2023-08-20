<pre>
    <?php
    // print_r($_POST);
    // $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
    // //working with image
    // $file_name = "IMG_".time()."_".$_FILES['picture']['name'];

    // $target = $_FILES['picture']['tmp_name'];
        
    // $destination = $approot.$file_name;
    
    // $is_file_moved = move_uploaded_file($target, $destination);

    // if($is_file_moved){
    //     $_picture =  $file_name;
    // }
    // else{
    //     $_picture = null;
    // }

    // echo $_POST['title'];
    $_full_name = $_POST['full_name'];
    $_userName = $_POST['user_name'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_phone_number = $_POST['phone_number'];
    // $_picture = $_FILES['picture']['name'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `users` (`full_name`, `user_name`, `email`, `password`, `phone_number`) VALUES (:full_name, :userName, :email, :password, :phone_number)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':full_name', $_full_name);
    $stmt -> bindParam(':userName', $_userName);
    $stmt -> bindParam(':email', $_email);
    $stmt -> bindParam(':password', $_password);
    $stmt -> bindParam(':phone_number', $_phone_number);

    $result = $stmt -> execute();

    // var_dump($result);

    header("location: index.php");

?>
</pre>