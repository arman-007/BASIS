<pre>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/config.php");

        use Ecom\banners;
    
        $_banner = new Banners();
    
        $banner = $_banner ->show();
    ?>
</pre>

<!doctype html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Banner Details</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Banner Details</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="index.php" class="nav-link text-success">Products List</a></li>
                    </ul>
                    <dl class="row">
                        <dt class="col-sm-3">ID :</dt>
                        <dd class="col-sm-9"><?= $banner['id'] ?></dd>

                        <dt class="col-sm-3">Title :</dt>
                        <dd class="col-sm-9"><?= $banner['title'] ?></dd>

                        <dt class="col-sm-3">Description :</dt>
                        <dd class="col-sm-9"><?= $banner['link'] ?></dd>

                        <dt class="col-sm-3">Promotional Message :</dt>
                        <dd class="col-sm-9"><?= $banner['promotional_message'] ?></dd>

                        <dt class="col-sm-3">Is active :</dt>
                        <dd class="col-sm-9"><?= $banner['is_active'] ? 'Active' : 'Inactive'; ?></dd>
                        
                        <dt class="col-sm-3">Picture :</dt>
                        <dd class="col-sm-9">
                            <img class="img-fluid" src="<?= $webroot ?>uploads/<?= $banner['picture']; ?>" alt="product image">
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>