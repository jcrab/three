<?php session_start();
if (!isset($_SESSION['first'])) {
    header("Location: index.html");
}
$first = $_SESSION['first'];
$last = $_SESSION['last'];
$age = $_SESSION['age'];

$addr = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$country = $_POST['country'];
?>
<!DOCTYPE HTML> 
<html> 
    <head> 
        <title>Results</title> 
    </head> 
    <body> 
        <p>The details submitted were as follows: 
        </p> 
        <ul> 
        <li><?= $first ?></li>
        <li><?= $last ?></li>
        <li><?= $age ?></li>
        <li><?= $addr ?></li>
        <li><?= $city ?></li>
        <li><?= $state ?></li>
        <li><?= $country ?></li>
        </ul> 
    </body> 
</html>
