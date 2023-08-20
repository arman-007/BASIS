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
    
    $query = "SELECT * FROM `products` WHERE id= (:id)";
    
    $stmt = $conn->prepare($query);
    
    $stmt -> bindParam(':id', $_id);
    
    $result = $stmt -> execute();
    
    $product = $stmt-> fetch();
    ?>
</pre>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Edit Product</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="index.php" class="nav-link text-success">Product List</a></li>
                    </ul>
                    <form action="update.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputId" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input type="hidden" class="form-control" id="inputId" name="id" value="<?= $product['id']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Title:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputTitle" name="title" value="<?= $product['title']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-3 col-form-label">Description:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputDescription" name="description" value="<?= $product['description']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="is_active" class="col-sm-3 col-form-label">Is Active:</label>
                            <div class="col-sm-9">
                                <?php
                                if ($product['is_active']==0){
                                ?>
                                    <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
                                <?php
                                }
                                else{
                                ?>
                                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active" checked>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPicture" class="col-sm-3 col-form-label">Picture:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="inputPicture" name="picture" value="<?= $product['picture']; ?>">
                                <img class="img-fluid" src="<?=$webroot?>uploads/<?= $product['picture'];?>" alt="product image">
                                <input type="hidden" name="old_picture" value="<?= $product['picture'];?>">
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