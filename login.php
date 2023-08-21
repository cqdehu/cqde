<?php
session_start();

// Adatbázis kapcsolódás és egyéb szükséges függvények

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Ellenőrizd a bejelentkezési adatokat és végrehajtsd a bejelentkezést

    // Ha sikeres bejelentkezés, akkor elindítjuk a munkamenetet és átirányítjuk a dashboard-ra
    if ($login_sikeres) {
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
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
    <?php if (isset($hiba_uzenet)) { echo "<p>$hiba_uzenet</p>"; } ?>
    <form action="login.php" method="post">
        Felhasználónév: <input type="text" name="username"><br>
        Jelszó: <input type="password" name="password"><br>
        <input type="submit" value="Bejelentkezés">
    </form>
</body>
</html>
