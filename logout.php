<?php
session_start();

// Munkamenet törlése és egyéb szükséges adatok törlése
session_unset();
session_destroy();

// Átirányítás a bejelentkezési oldalra
header("Location: index.php");
?>
