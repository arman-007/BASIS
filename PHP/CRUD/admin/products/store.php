<pre>
    <?php
    // print_r($_POST);
    $approot = $_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/uploads/";
    //working with image
    $target = $_FILES['picture']['tmp_name'];
        
    $destination = $approot.$_FILES['picture']['name'];
    
    $is_file_moved = move_uploaded_file($target, $destination);

    if($is_file_moved){
        $_picture = $_FILES['picture']['name'];
    }
    else{
        $_picture = null;
    }

    // echo $_POST['title'];
    $_title = $_POST['title'];
    $_description = $_POST['description'];
    $_picture = $_FILES['picture']['name'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `products` (`title`, `description`, `picture`) VALUES (:title, :description, :picture)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':description', $_description);
    $stmt -> bindParam(':picture', $_picture);

    $result = $stmt -> execute();

    var_dump($result);

    header("location: index.php");

?>
</pre>