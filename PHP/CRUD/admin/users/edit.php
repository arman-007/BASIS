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
    
    $stmt -> bindParam(':id', $_id);
    
    $result = $stmt -> execute();
    
    $user = $stmt-> fetch();
    ?>
</pre>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Edit User</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="index.php" class="nav-link text-success">User List</a></li>
                    </ul>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputId" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input type="hidden" class="form-control" id="inputId" name="id" value="<?= $user['id']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputName" class="col-sm-3 col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" name="name" value="<?= $user['name']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputUserName" class="col-sm-3 col-form-label">User Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputUserName" name="user_name" value="<?= $user['user_name']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">E-mail:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail" name="email" value="<?= $user['email']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword" name="password" value="<?= $user['password']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPhone" class="col-sm-3 col-form-label">Phone:</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="inputPhone" name="phone" value="<?= $user['phone']; ?>">
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
<!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid magnam voluptatem reiciendis beatae minus corporis voluptate sint iste cumq -->