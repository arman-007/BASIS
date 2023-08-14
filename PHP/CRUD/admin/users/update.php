<pre>
    <?php
    // print_r($_POST);
    // die();
    // $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
    // //working with image
    // if($_FILES['picture']['name'] != ""){
    //     $file_name = "IMG_".time()."_".$_FILES['picture']['name'];

    //     $target = $_FILES['picture']['tmp_name'];
            
    //     $destination = $approot.$file_name;

    //     $is_file_moved = move_uploaded_file($target, $destination);

    //     if($is_file_moved){
    //         $_picture =  $file_name;
    //     }
    //     else{
    //         $_picture = null;
    //     }
    // }
    // else{
    //     $_picture = $_POST['old_picture'];
    // }
    $_id = $_POST['id'];
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

    $query = "UPDATE `users` SET `name` = :name, `user_name` = :userName, `email` = :email, `password` = :password, `phone` = :phone WHERE `users`.`id` = :id";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':id', $_id);
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