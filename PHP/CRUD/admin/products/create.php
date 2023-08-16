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
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Add New Product</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Title:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputTitle" name="title" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-3 col-form-label">Description:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputDescription" name="description" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="is_active" class="col-sm-3 col-form-label">Is Active:</label>
                            <div class="col-sm-9">
                                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
                            </div>
                        </div>
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Default checkbox
                            </label>
                        </div> -->
                        <div class="mb-3 row">
                            <label for="inputPicture" class="col-sm-3 col-form-label">Picture:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="inputPicture" name="picture" value="" required>
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