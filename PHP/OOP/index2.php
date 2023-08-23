<?php
include_once("vendor/autoload.php");

use Bitm\customers\Person;
use Bitm\products\physical\Book;
use Bitm\products\physical\Pen;
use Bitm\products\virtual\Course;

$wafi = new Person();

$wafi ->name = "Wafi Abdullah";
$wafi ->age = 25;
$wafi ->gender = "male";
echo $wafi -> talk();
echo "<br>";
echo $wafi->age;
echo "<br>";

$fatima = new Person();
echo $fatima ->talk();
echo "<br>";



$himu = new Book();
$himu -> isbn="sak7uyt0432y5ruyhgdf873qyt45";
$himu -> title="ajke Himu'r biye";

echo $wafi->name." is reading ".$himu->title;
echo "<br>";

?>