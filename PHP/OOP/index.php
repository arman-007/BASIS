<?php
include_once('user.php');

$newObj = new User();

$newObj -> setFirstName("arman");
echo "First Name is: ".$newObj ->getFirstName();

echo "<br><br>";

$newObj -> setLastName("hosen");
echo "Last Name is: ".$newObj ->getLastName();

echo "<br><br>";

// $newObj -> getFullName();
echo "Full Name is: ".$newObj ->getFullName();

echo "<br><br>";
echo "<br><br>";

echo "Answer to the question No. - 7";
echo "<br><br>";
$user1 = new User();

$user1 -> setFirstName("John");
echo "First Name is: ".$user1 ->getFirstName();

echo "<br><br>";

$user1 -> setLastName("Doe");
echo "Last Name is: ".$user1 ->getLastName();

echo "<br><br>";

// $user1 -> getFullName();
echo "Full Name is: ".$user1 ->getFullName();

echo "<br><br>";
echo "<br><br>";

echo "Answer to the question No. - 8";
echo "<br><br>";
//Object using constructor
$user2 = new ConstructUser("Mr.", "Beast");
echo $user2 -> getFullName();
?>