<?php
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "LEadmin23";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}


$selected_offer = $_POST["name"];

$sql = "DELETE FROM `school` WHERE `id` = '$selected_offer'";

if ($conn->query($sql) === TRUE) {
    echo "Az adat sikeresen törölve.";
} else {
    echo "Hiba a törlés során: " . $conn->error;
}

// Kapcsolat lezárása
$conn->close();
?>