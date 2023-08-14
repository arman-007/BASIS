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
    $_name = $_POST['name'];
    $_userName = $_POST['user_name'];
    $_email = $_POST['email'];
    $_password = $_POST['password'];
    $_phone = $_POST['phone'];
    // $_picture = $_FILES['picture']['name'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `users` (`name`, `user_name`, `email`, `password`, `phone`) VALUES (:name, :userName, :email, :password, :phone)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':name', $_name);
    $stmt -> bindParam(':userName', $_userName);
    $stmt -> bindParam(':email', $_email);
    $stmt -> bindParam(':password', $_password);
    $stmt -> bindParam(':phone', $_phone);

    $result = $stmt -> execute();

    // var_dump($result);

    header("location: index.php");

?>
</pre>