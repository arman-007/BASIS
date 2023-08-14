<pre>
    <?php
    // print_r($_FILES);
    // die();
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
    // var_dump($_picture);
    // die();

    // echo $_POST['title'];
    $_title = $_POST['title'];
    // $_bannerPicture = $_FILES['picture']['name'];
    $_link = $_POST['link'];
    $_promotionalMessage = $_POST['promotionalMessage'];
    $_bannerHTML = $_POST['bannerHTML'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ARMAN";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `banners` (`title`, `picture`, `link`,`promotional_message`,`html_banner`) VALUES (:title, :picture, :link, :promotionalMessage, :bannerHTML)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':picture', $_picture);
    $stmt -> bindParam(':link', $_link);
    $stmt -> bindParam(':promotionalMessage', $_promotionalMessage);
    $stmt -> bindParam(':bannerHTML', $_bannerHTML);

    $result = $stmt -> execute();

    var_dump($result);

    header("location:index.php");


?>
</pre>