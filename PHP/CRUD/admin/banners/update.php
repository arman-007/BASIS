<pre>
    <?php
    $_id = $_POST['id'];
    $_title = $_POST['title'];
    $_promotionalMessage = $_POST['promotionalMessage'];
    if(array_key_exists('is_active', $_POST)){
        $_is_active = $_POST['is_active'];
    }
    else{
        $_is_active = 0;
    }
    $_modified_at = date("Y-m-d h-i-s",time());

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "UPDATE `banners` SET `title` = :title, `promotional_message` = :promotional_message, `is_active` = :is_active WHERE `banners`.`id` = :id";

    $stmt = $conn->prepare($query);

    $stmt -> bindParam(':id', $_id);
    $stmt -> bindParam(':title', $_title);
    $stmt -> bindParam(':promotional_message', $_promotionalMessage);
    $stmt -> bindParam(':is_active', $_is_active);

    $result = $stmt -> execute();

    // var_dump($result);

    header("location: index.php");
    ?>
</pre>