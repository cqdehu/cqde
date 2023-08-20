<?php

$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$name = $_POST["name"];
$price = $_POST["price"];
$location = $_POST["location"];
$area = $_POST["area"];

$sql = "INSERT INTO school (name, description, price, location, area, rate, rent, cost ) VALUES ('$name', '$description', '$price', '$location', '$area', '$rate', '$rent', '$cost')";

if ($conn->query($sql) === TRUE) {
    echo "Adatok sikeresen hozzáadva az adatbázishoz.";
} else {
    echo "Hiba: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>