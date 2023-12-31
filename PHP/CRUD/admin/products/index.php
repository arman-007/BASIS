<pre>
<?php
    // include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/authenticator.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/config.php");
            
    use Ecom\Products;

    $_product = new Products();

    $products = $_product ->index();
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
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Products List</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="create.php" class="nav-link text-success">Add New</a></li>
                        <li class="nav-item"><a href="trash_index.php" class="nav-link text-success">Trashed items</a></li>
                    </ul>
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(count($products) > 0):
                                foreach($products as $product):
                            ?>
                            <tr>
                                <td scope="row"><?= $product['title']; ?></td>
                                <td class="text-center" scope="row"><?= $product['is_active'] ? 'Active' : 'Inactive'; ?></td>
                                <td class="text-center" ><a href="show.php?id=<?= $product['id']; ?>">Show</a> | <a href="edit.php?id=<?= $product['id']; ?>">edit</a> | <a href="trash.php?id=<?= $product['id']; ?>">Trash</a></td>
                            </tr>
                            <?php
                                endforeach;
                            else:
                            ?>
                            <tr>
                                <td colspan="2" class="text-center" >
                                    No product is available. 
                                    <a href="create.php" class="text-success">Click here to add a product</a>
                                </td>
                            </tr>
                            <?php
                            endif;
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>