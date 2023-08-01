<?php




?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> File Upload </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <section>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-5">
          <h1>File Upload</h1>
          <form action="11. file_processor.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
              <label for="inputFile" class="col-sm-3 col-form-label">File Upload:</label>
              <div class="col-sm-9">
                <input type="file" class="form-control" id="inputFile" name="my_file" value="">
              </div>
            </div>
            <button type="submit" class="btn btn-secondary">Upload</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>