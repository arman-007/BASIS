<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Concept</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <section>
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-6">
              <h1 class="mb-4 mt-3 text-center">Web Concept</h1>
              <form action="processor.php" method="POST">
                <div class="mb-3 row">
                  <label for="inputFirstName" class="col-sm-3 col-form-label">First Name:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputFirstName" name="first_name" value="" maxlength="50">
                  </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputLastName" class="col-sm-3 col-form-label">Last Name:</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="inputLastName" name="last_name" value="" maxlength="50">
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