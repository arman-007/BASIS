<pre>
    <?php
    $_id = $_GET['id'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ARMAN";
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $query = "DELETE FROM banners WHERE `banners`.`id` = :id";
    
    $stmt = $conn->prepare($query);
    
    $stmt -> bindParam(':id', $_id);
    
    $result = $stmt -> execute();
    
    // $product = $stmt-> fetch();
    header("location: index.php");

    ?>
</pre>