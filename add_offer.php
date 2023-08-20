<?php

$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$id = uniqid();
$name = mysqli_real_escape_string($conn, $_POST["name"]);
$price = mysqli_real_escape_string($conn, $_POST["price"]);
$location = mysqli_real_escape_string($conn, $_POST["location"]);
$area = mysqli_real_escape_string($conn, $_POST["area"]);
$description = mysqli_real_escape_string($conn, $_POST["description"]);
$rate = mysqli_real_escape_string($conn, $_POST["rate"]);
$person = mysqli_real_escape_string($conn, $_POST["person"]);
$bed = mysqli_real_escape_string($conn, $_POST["bed"]);
$room = mysqli_real_escape_string($conn, $_POST["room"]);
$rent = mysqli_real_escape_string($conn, $_POST["rent"]);
$cost = mysqli_real_escape_string($conn, $_POST["cost"]);

$sql = "INSERT INTO school (id, name, description, price, location, area, rate, person, bed, room, rent, cost) VALUES ('$id', '$name', '$description', '$price', '$location', '$area', '$rate', '$person', '$bed', '$room', '$rent', '$cost')";


if ($conn->query($sql) === TRUE) {
    echo "Adatok sikeresen hozzáadva az adatbázishoz.";
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
