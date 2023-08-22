<pre>
    <?php
        echo "<h4>Example of implode()</h4>";

        $array = array('Md', ' Arman ', 'Hosen');
        $full_name = implode(" ", $array);
        echo $full_name;

        echo"<br>";
        echo"<br>";
        echo"<br>";

        $array = array('lastname', 'email', 'address');
        $full_name = implode(", ", $array);
        echo $full_name;
    ?>
</pre>