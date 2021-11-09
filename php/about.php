<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "manufacturing";
$conn = mysqli_connect($server, $username, $password, $database);
?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
} ?>
<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: signin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>About</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <div>
        <p>Troy Bakes is a bakery product manufacturing unit which supplies its products to local bakeries. The unit is known for its unique baking style and variety of items available. The unit’s immediate vision is to expand itself within the city.
        </p>

    </div>
</body>

</html>