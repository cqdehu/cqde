<?php
session_start();

// Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
if (!isset($_SESSION["username"])) {
    header("Location: index");
    exit(); // Fontos: Azonnal leállítjuk a további kód végrehajtását
}

// Ha a felhasználó be van jelentkezve, folytathatjuk a dashboard tartalmával
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Üdvözöllek a Dashboardon, <?php echo $_SESSION["username"]; ?>!</h2>
    <p>Ez az oldal csak bejelentkezett felhasználóknak érhető el.</p>
    <a href="logout.php">Kijelentkezés</a>
</body>
</html>
