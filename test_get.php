<?php
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$sql = "SELECT * FROM `school`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['rate'];
        echo mb_strtoupper($row["name"],'UTF-8');
        echo $row["price"];
        echo $row["area"];
    }
} else {
    echo "Nincsenek adatok.";
}

$conn->close();
?>
