<?php
session_start();

// Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
if (!isset($_SESSION["username"])) {
    header("Location: index");
    exit(); // Fontos: Azonnal leállítjuk a további kód végrehajtását
}
//

$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

// Ellenőrizd, hogy a kapcsolat létrejött-e
if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

// Felhasználónevek lekérdezése az adatbázisból
$sql = "SELECT username FROM users";
$result = $conn->query($sql);

$felhasznalo_nevek = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $felhasznalo_nevek[] = $row["username"];
    }
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

    <h3>Felhasználó nevek az adatbázisból:</h3>
        <ul>
            <?php
            foreach ($felhasznalo_nevek as $nev) {
                echo "<li>$nev</li>";
            }
            ?>
        </ul>
</body>
</html>
