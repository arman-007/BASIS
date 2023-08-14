<pre>
<?php
// connection to DB
$servername = "localhost";
$username = "root";
$password = "";

$conn = new PDO("mysql:host=$servername;dbname=ARMAN", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM `users`";

$stmt = $conn->prepare($query);

$result = $stmt->execute();
$users = $stmt->fetchAll();

// var_dump($users);
?>
</pre>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-10
                ">
                    <h1 class="text-center fs-3 fw-bolder mt-3 mb-4">Users List</h1>
                    <ul class="nav d-flex justify-content-center mb-4 fw-bold">
                        <li class="nav-item"><a href="create.php" class="nav-link text-success">Add New</a></li>
                    </ul>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">E-mail</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(count($users) > 0):
                                foreach($users as $user):
                            ?>
                            <tr>
                                <th scope="row"><?= $user['name']; ?></th>
                                <th scope="row"><?= $user['user_name']; ?></th>
                                <th scope="row"><?= $user['email']; ?></th>
                                <th scope="row"><?= $user['phone']; ?></th>
                                <td><a href="show.php?id=<?= $user['id']; ?>">Show</a> | <a href="edit.php?id=<?= $user['id']; ?>">edit</a> | <a href="delete.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
                            </tr>
                            <?php
                                endforeach;
                            else:
                            ?>
                            <tr>
                                <td colspan="2" class="text-center" >
                                    No user is available. 
                                    <a href="create.php" class="text-success">Click here to add a user</a>
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