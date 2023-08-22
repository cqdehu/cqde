<?php
session_start();

include './config/db_config';

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
            echo 'Hibás jelszó!';
        }
    } else {
        echo 'Nincs ilyen felhasználó!';
    }
}

$conn->close();
?>
