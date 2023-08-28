<pre>
    <?php
    $webroot = "http://localhost/ARMAN/BASIS/PHP/0400040745/";

    $_userName = $_POST['user_name'];
    // $_email = $_POST['email'];
    $_password = $_POST['password'];
    // $_phone_number = $_POST['phone_number'];
    // $_picture = $_FILES['picture']['name'];

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT COUNT(*) AS total FROM `users` WHERE user_name LIKE :user_name AND password LIKE :password";

    $stmt = $conn->prepare($query);

    // $stmt -> bindParam(':full_name', $_full_name);
    $stmt -> bindParam(':user_name', $_userName);
    // $stmt -> bindParam(':email', $_email);
    $stmt -> bindParam(':password', $_password);
    // $stmt -> bindParam(':phone_number', $_phone_number);

    $result = $stmt -> execute();

    $total_found = $stmt -> fetch();

    // var_dump($result);
    if($total_found['total'] > 0){
        $_SESSION['is_authenticated'] = true;
        header("location: ".$webroot."front/php/public/index.php");
    }
    else{
        $_SESSION['is_authenticated'] = false;
        header("location: ".$webroot."404.php");
    }

?>
</pre>