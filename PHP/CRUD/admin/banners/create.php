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
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Add New Banner</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Banner Title:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputTitle" name="title" value="" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-3 col-form-label">Picture:</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="inputTitle" name="picture" value="" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputLink" class="col-sm-3 col-form-label">Link:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputLink" name="link" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="promotionalMessage" class="col-sm-3 col-form-label">Promotional Message:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="promotionalMessage" name="promotionalMessage" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="bannerHTML" class="col-sm-3 col-form-label">Banner HTML:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="bannerHTML" name="bannerHTML" value="">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="is_active" class="col-sm-3 col-form-label">Is Active:</label>
                            <div class="col-sm-9">
                                <input class="form-check-input" type="checkbox" value="1" id="is_active" name="is_active">
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
