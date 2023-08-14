<pre>
    <?php
    $webroot = "http://localhost/ARMAN/BASIS/PHP/CRUD/";
    $_id = $_GET['id'];

    // var_dump($_GET);

    // connection to DB
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ARMAN";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT * FROM `users` WHERE id= (:id)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(':id', $_id);

    $result = $stmt->execute();

    $user = $stmt->fetch();
    ?>
</pre>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">User Details</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="index.php" class="nav-link text-success">User List</a></li>
                    </ul>
                    <dl class="row">
                        <dt class="col-sm-3">ID :</dt>
                        <dd class="col-sm-9"><?= $user['id'] ?></dd>

                        <dt class="col-sm-3">Name :</dt>
                        <dd class="col-sm-9"><?= $user['name'] ?></dd>

                        <dt class="col-sm-3">User Name :</dt>
                        <dd class="col-sm-9"><?= $user['user_name'] ?></dd>
                        
                        <dt class="col-sm-3">E-mail :</dt>
                        <dd class="col-sm-9"><?= $user['email'] ?></dd>
                        
                        <dt class="col-sm-3">Phone :</dt>
                        <dd class="col-sm-9"><?= $user['phone'] ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>