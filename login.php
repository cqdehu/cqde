<?php
session_start();

// Adatbázis kapcsolódás
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ellenőrizd a bejelentkezési adatokat és végrehajtsd a bejelentkezést

    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Jelszó ellenőrzése
        if (password_verify($password, $hashedPassword)) {
            $_SESSION["username"] = $username;
            header("Location: dashboard");
        } else {
            $hiba_uzenet = "Hibás felhasználónév vagy jelszó.";
        }
    } else {
        $hiba_uzenet = "Hibás felhasználónév vagy jelszó.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bejelentkezés</title>
</head>

<body>
    <h2>Bejelentkezés</h2>
    <?php if (isset($hiba_uzenet)) {
        echo "<p>$hiba_uzenet</p>";
    } ?>
    <form action="login" method="post">
        Felhasználónév: <input type="text" name="username"><br>
        Jelszó: <input type="password" name="password"><br>
        <input type="submit" value="Bejelentkezés">
    </form>
</body>

</html>