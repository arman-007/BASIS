<pre>
    <?php
    $_id = $_POST['id'];
    $_title = $_POST['title'];
    $_promotionalMessage = $_POST['promotionalMessage'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `banners` SET `title` = :title, `promotional_message` = :promotional_message WHERE `banners`.`id` = :id";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':id', $_id);
    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':promotional_message', $_promotionalMessage);

    $result = $stmt -> execute();

    var_dump($result);

    header("location: index.php");
    ?>
</pre>