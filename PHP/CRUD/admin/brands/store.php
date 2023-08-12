<pre>
    <?php
    // print_r($_POST);

    // echo $_POST['title'];
    $_title = $_POST['title'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `brands` (`title`) VALUES (:title)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':title', $_title);

    $result = $stmt -> execute();

    var_dump($result);

?>
</pre>