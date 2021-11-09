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
    <!---
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1.0"> --->
    <link rel="stylesheet" href="styles.css">
    <title>Search</title>
    <!---
    <span>
        <a href=" http://localhost//php/index.php">
            <img class="logo" src="https://drive.google.com/uc?export=view&id=1VLvcl-7i5ghIpJzN8FXKQKoFA_HdZbHZ" alt="Troy Bakes" title="Troy Bakes" />
        </a>
    </span>

    <head>
        Required meta tags --->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--- Bootstrap CSS --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
</head>

<body>
    <?php require 'partials/_nav.php' ?>

    <!--- Optional JavaScript; choose one of the two! --->

    <!--- Option 1: Bootstrap Bundle with Popper --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--- Option 2: Separate Popper and Bootstrap JS --->
    <!---
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    --->
    <h2>
        Products
    </h2>
    <p>Here's a list of supplied to bakerys. </p>
    <!--<tr>
        <th colspan="4">
            <h2>Production Database</h2>
        </th>
    </tr>
    <th><b> iname | </b></th>
    <th><b> iprice | </b></th>
    <th><b> icateg | </b></th>
    <th><b> isupply | </b></th>
    <th><b> iprod | </b></th>
    </tr>
    <br>
-->
    <?php
    /*
    $sql = "SELECT * FROM `supply`";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //echo var_dump($row);
            echo $row['iname'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['iprice'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['icateg'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['isupply'] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row['iprod'];
            echo "<br>";
            //echo '
            //<table>
            //<th>
            //</table>
            //';
        }
    }
    */

    ?>
    <?php


    $sql = "SELECT * FROM `supply`";
    $result = mysqli_query($conn, $sql);



    echo "<table border='1'>

<tr>

<th>iname</th>

<th>iprice</th>

<th>icateg</th>

<th>isupply</th>

<th>iprod</th>

</tr>";



    while ($row = mysqli_fetch_array($result)) {

        echo "<tr>";

        echo "<td>" . $row['iname'] . "</td>";

        echo "<td>" . $row['iprice'] . "</td>";

        echo "<td>" . $row['icateg'] . "</td>";

        echo "<td>" . $row['isupply'] . "</td>";

        echo "<td>" . $row['iprod'] . "</td>";

        echo "</tr>";
    }

    echo "</table>";



    mysqli_close($conn);

    ?>


</body>

</html>