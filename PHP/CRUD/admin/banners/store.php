<pre>
    <?php
    // print_r($_FILES);
    // die();
    include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/CRUD/config.php");

    use Ecom\banners;

    $_banners = new Banners();

    $_banners ->store();


?>
</pre>