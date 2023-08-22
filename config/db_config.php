<?php
$db_host = $_SERVER['DB_HOST'];
$db_user = $_SERVER['DB_USER'];
$db_pass = $_SERVER['DB_PASS'];
$db_name = $_SERVER['DB_NAME'];

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Hiba a kapcsolódás során: " . $conn->connect_error);
}
?>
