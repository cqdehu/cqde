<?php
session_start();

$db_host = "localhost";
$db_user = "u142909563_LEAdmin";
$db_pass = "LEadmin23";
$db_name = "u142909563_LEARN";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Hiba a kapcsolódás során: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT password FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION["username"] = $username;
            echo 'success';
        } else {
            echo 'failed';
        }
    }
}

$conn->close();
?>
