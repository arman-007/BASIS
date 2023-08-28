<?php
    $webroot = "http://localhost/ARMAN/BASIS/PHP/0400040745/";
?>
<main class="mt-3">
    <div class="container">
        <h1 class="fs-4 fw-bold text-secondary text-center mb-4">Log in to your account</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-sm-7">
                <form action="<?=$webroot?>admin/users/login_processor.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="inputUserName" class="col-sm-3 col-form-label">User Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputUserName" name="user_name" value="" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="inputPassword" name="password" value="" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-secondary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</main>