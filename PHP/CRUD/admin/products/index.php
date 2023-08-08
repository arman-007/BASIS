<pre>
<?php
// connection to DB
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `products`";

$stmt = $conn->prepare($query);

$result = $stmt->execute();
$products = $stmt->fetchAll();

// var_dump($products);
?>
</pre>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD (List)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Product List</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php
                        foreach($products as $product):
                        ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?= $product['title']; ?></th>
                                <td>Show | Edit | Delete</td>
                            </tr>
                        </tbody>
                        <?php
                        endforeach
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>