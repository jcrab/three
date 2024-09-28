<?php session_start();
//echo "this is NOT ignored";
//var_dump($_POST);
if (!isset($_POST['first_name'])) {
    header("Location: index.html");
}

$fn = $_POST['first_name'];
$ln = $_POST['family_name'];

$_SESSION['first'] = $fn;
$_SESSION['last'] = $ln;

$someone = $fn . " " . $ln;
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Multiple form 2</title>
    </head>

    <body>
        <!-- say hello to the user here -->
        <?php echo "Hello, $someone" ?>

        <form action="multiple_03.php" method="GET">
            <p>
                <label for="age">Age:</label>
                <input type="number" name="age" id="age_id">
            </p>
            <p>
                <input type="submit" name="next" value="Next &gt;">
            </p>
        </form>
    </body>
</html>
