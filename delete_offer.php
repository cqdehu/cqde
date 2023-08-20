

<?php
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}


$selected_offer = $_POST["selected_offer"];

$sql = "DELETE FROM school WHERE name = $selected_offer";

if ($conn->query($sql) === TRUE) {
    echo "Az adat sikeresen törölve.";
} else {
    echo "Hiba a törlés során: " . $conn->error;
}

// Kapcsolat lezárása
$conn->close();
?>