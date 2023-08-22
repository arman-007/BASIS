<pre>
    <?php
        echo "<h4>Example of str_replace()</h4>";

        $phrase = "You should eat fruits, vegetables, and fiber every day.";
        $healthy = array("fruits", "vegetables", "fiber");
        $yummy = array("pizza", "beer", "ice-cream");
        
        $new_phrase = str_replace($healthy, $yummy, $phrase);
        echo $new_phrase;

        echo"<br>";
        echo"<br>";
        echo"<br>";
    ?>
</pre>