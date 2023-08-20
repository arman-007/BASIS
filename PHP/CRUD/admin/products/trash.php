<pre>
    <?php
    $_id = $_GET['id'];

    $_is_deleted = 1;

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ARMAN";
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id` = :id";
    
    $stmt = $conn->prepare($query);
    
    $stmt -> bindParam(':id', $_id);
    $stmt -> bindParam(':is_deleted', $_is_deleted);
    
    $result = $stmt -> execute();
    
    // $product = $stmt-> fetch();
    header("location: index.php");

    ?>
</pre>