<pre>
    <?php
    // print_r($_POST);
    $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
    //working with image
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

    // echo $_POST['title'];
    $_title = $_POST['title'];
    $_description = $_POST['description'];
    if(array_key_exists('is_active', $_POST)){
        $_is_active = $_POST['is_active'];
    }
    else{
        $_is_active = 0;
    }
    // $_picture = $_FILES['picture']['name'];
    $_created_at = date("Y-m-d h-i-s",time());
    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `products` (`title`, `description`, `is_active`, `picture`, `created_at`) VALUES (:title, :description, :is_active, :picture, :created_at)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':description', $_description);
    $stmt -> bindParam(':is_active', $_is_active);
    $stmt -> bindParam(':picture', $_picture);
    $stmt -> bindParam(':created_at', $_created_at);

    $result = $stmt -> execute();

    // var_dump($result);

    header("location: index.php");

?>
</pre>