<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Radio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
  <section>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-sm-5">
          <h1 class="fs-3 fw-bolder">Web Concept</h1>
          <form action="processor.php" method="post" enctype="multipart/form-data">
            <p><strong>Please Check Any One</strong></p>
            <p><strong>Are you agreed to the terms and condition?</strong></p>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="toggle" value="1" id="toggle-yes">
              <label class="form-check-label" for="toggle-yes">
                Yes
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input checked" type="radio" name="toggle" value="0" id="toggle-no">
              <label class="form-check-label" for="toggle-no">
                No
              </label>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>