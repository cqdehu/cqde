<?php

$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST["name"]);
$price = mysqli_real_escape_string($conn, $_POST["price"]);
$location = mysqli_real_escape_string($conn, $_POST["location"]);
$area = mysqli_real_escape_string($conn, $_POST["area"]);
$description = mysqli_real_escape_string($conn, $_POST["description"]);
$rate = mysqli_real_escape_string($conn, $_POST["rate"]);
$rent = mysqli_real_escape_string($conn, $_POST["rent"]);
$cost = mysqli_real_escape_string($conn, $_POST["cost"]);

$sql = "INSERT INTO school (name, description, price, location, area, rate, rent, cost) VALUES ('$name', '$description', '$price', '$location', '$area', '$rate', '$rent', '$cost')";

if ($conn->query($sql) === TRUE) {
    echo "Adatok sikeresen hozzáadva az adatbázishoz.";
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
