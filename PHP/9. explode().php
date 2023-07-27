<pre>
    <?php
        echo "<h4>Example of explode()</h4>";

        $menu = "pizza1 pizza2 pizza3 pasta4 pasta5 5.ChickenLegPiece 6";

        //explode()
        $items = explode(" ", $menu);
        print_r($items);

        echo"<br>";
        echo"<br>";
        echo"<br>";

        echo $items[0];
        echo"<br>";
    ?>
</pre>