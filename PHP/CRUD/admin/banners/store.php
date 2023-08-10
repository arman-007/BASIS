<pre>
    <?php
    // print_r($_FILES);
    // die();

    // echo $_POST['title'];
    $_title = $_POST['title'];
    $_bannerPicture = $_FILES['picture']['name'];
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

    $query = "INSERT INTO `banners` (`title`, `picture`, `link`,`promotional_message`,`html_banner`) VALUES (:title, :bannerPicture, :link, :promotionalMessage, :bannerHTML)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':bannerPicture', $_bannerPicture);
    $stmt -> bindParam(':link', $_link);
    $stmt -> bindParam(':promotionalMessage', $_promotionalMessage);
    $stmt -> bindParam(':bannerHTML', $_bannerHTML);

    $result = $stmt -> execute();

    var_dump($result);

    header("location:index.php");


?>
</pre>