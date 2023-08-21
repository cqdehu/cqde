<?php
// Adatbázis kapcsolódás és egyéb szükséges függvények

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ellenőrizd a felhasználónév egyediségét

    // Jelszó hashelése
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Adatbázisba mentés
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
    if ($conn->query($sql) === TRUE) {
        echo "Sikeres regisztráció.";
    } else {
        echo "Hiba a regisztráció során: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Regisztráció</title>
</head>
<body>
    <h2>Regisztráció</h2>
    <form action="registration.php" method="post">
        Felhasználónév: <input type="text" name="username"><br>
        Jelszó: <input type="password" name="password"><br>
        <input type="submit" value="Regisztráció">
    </form>
</body>
</html>
