<pre>
<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/0400040745/config.php");

    use Zay\Sliders;

    $_slider = new Sliders();

    $sliders = $_slider ->index();
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
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Banner List</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="create.php" class="nav-link text-success">Add New</a></li>
                        <li class="nav-item"><a href="trash_index.php" class="nav-link text-success">Trashed Items</a></li>
                    </ul>
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <?php
                        foreach($sliders as $slider):
                        ?>
                        <tbody>
                            <tr>
                                <td scope="row"><?= $slider['title']; ?></td>
                                <td class="text-center" scope="row"><?= $slider['is_active'] ? 'Active' : 'Inactive'; ?></td>
                                <td class="text-center"><a href="show.php?id=<?= $slider['id']; ?>">Show</a> | <a href="edit.php?id=<?= $slider['id']; ?>">Edit</a> | <a href="delete.php?id=<?= $slider['id']; ?>">Delete</a></td>
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