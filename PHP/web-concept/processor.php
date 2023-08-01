<pre>
    <?php
    print_r($_SERVER);
    echo "<br><br><br>";

    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
        $first_name = null;
        $last_name = null;

        if (array_key_exists('first_name', $_POST)) {
            $first_name = $_POST['first_name'];
        }
        if (array_key_exists('last_name', $_POST)) {
            $last_name = $_POST['last_name'];
        }

        echo "My name is " . $first_name . " " . $last_name;
    }
    ?>
</pre>