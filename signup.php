<?php
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$regUsername = mysqli_real_escape_string($conn, $_POST['username']);
$regPassword = mysqli_real_escape_string($conn, $_POST['password']);
$hashedPassword = hash('sha256', $regPassword);

// Ellenőrizze, hogy a felhasználónév még nem létezik
$checkUsernameSql = "SELECT * FROM users WHERE username = '$regUsername'";
$checkResult = $conn->query($checkUsernameSql);

if ($checkResult->num_rows > 0) {
    echo json_encode(['error' => 'Ez a felhasználónév már foglalt!']);
} else {
    // Regisztráció
    $insertUserSql = "INSERT INTO users (username, password) VALUES ('$regUsername', '$hashedPassword')";
    if ($conn->query($insertUserSql)) {
        echo json_encode(['success' => 'Sikeres regisztráció! Most már bejelentkezhetsz.']);
    } else {
        echo json_encode(['error' => 'Hiba történt a regisztráció során.']);
    }
}


$conn->close();
?>
