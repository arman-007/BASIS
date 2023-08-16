<pre>
    <?php

    $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
    //working with image
    if($_FILES['picture']['name'] != ""){
        $file_name = "IMG_".time()."_".$_FILES['picture']['name'];

        $target = $_FILES['picture']['tmp_name'];
            
        $destination = $approot.$file_name;

        $is_file_moved = move_uploaded_file($target, $destination);

        if($is_file_moved){
            $_picture =  $file_name;
        }
        else{
            $_picture = null;
        }
    }
    else{
        $_picture = $_POST['old_picture'];
    }

    $_id = $_POST['id'];
    $_title = $_POST['title'];
    $_description = $_POST['description'];
    $_is_active = $_POST['is_active'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `products` SET `title` = :title, `description` = :description, `is_active` = :is_active, `picture` = :picture WHERE `products`.`id` = :id";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':id', $_id);
    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':description', $_description);
    $stmt -> bindParam(':is_active', $_is_active);
    $stmt -> bindParam(':picture', $_picture);

    $result = $stmt -> execute();

    // var_dump($result);

    header("location: index.php");
    ?>
</pre>