<pre>
    <?php
    // print_r($_FILES);
    // die();
    include_once($_SERVER['DOCUMENT_ROOT']."/ARMAN/BASIS/PHP/0400040745/config.php");

    use Zay\Sliders;

    $_sliders = new Sliders();

    $_sliders ->store();

?>
</pre>