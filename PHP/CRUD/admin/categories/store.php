<pre>
    <?php
    // print_r($_POST);

    // echo $_POST['title'];
    $_name = $_POST['name'];
    $_link = $_POST['link'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO `categories` (`name`, `link`) VALUES (:name, :link)";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':name', $_name);
    $stmt -> bindParam(':link', $_link);
    $result = $stmt -> execute();

    var_dump($result);

    ?>
</pre>