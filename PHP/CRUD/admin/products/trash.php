<pre>
    <?php
        include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/config.php");
        
        use Ecom\Products;

        $_product = new Products();

        $_product ->trash();
    ?>
</pre>