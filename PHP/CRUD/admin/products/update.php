<pre>
    <?php
    $_id = $_POST['id'];
    $_title = $_POST['title'];
    $_description = $_POST['description'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `products` SET `title` = :title, `description` = :description WHERE `products`.`id` = :id";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':id', $_id);
    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':description', $_description);

    $result = $stmt -> execute();

    var_dump($result);

    header("location: index.php");
    ?>
</pre>