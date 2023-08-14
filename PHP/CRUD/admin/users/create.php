<?php


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">User Registration</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputName" class="col-sm-3 col-form-label">Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputName" name="name" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputUserName" class="col-sm-3 col-form-label">User Name:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputUserName" name="user_name" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputEmail" class="col-sm-3 col-form-label">Email:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail" name="email" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Password:</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword" name="password" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputMobile" class="col-sm-3 col-form-label">Mobile:</label>
                            <div class="col-sm-9">
                                <input type="tel" class="form-control" id="inputMobile" name="phone" value="" required>
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