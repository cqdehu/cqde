<?php
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$sql = "SELECT * FROM `school`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col p-0 m-0">';
        echo '<div class="card rounded-5 border-0">';
        echo '<span class="position-relative">';
        echo '<span class="position-absolute top-0 end-0">';
        echo '<span class="badge rate-bg rate m-3 px-3 fs-6 rounded-4">' . $row['rate'] . '</span>';
        echo '</span>';
        echo '</span>';
        echo '<img src="/src/img.png" alt="" class="rounded-top-5 border-0">';
        echo '<div class="card-body">';
        echo '<div class="container">';
        echo '<div class="row">';
        echo '<div class="col p-0 m-0">';
        echo '<p class="p-0 m-0 fs-4 text-start name">' . $row["name"] . '</p>';
        echo '</div>';
        echo '<div class="col p-0 m-0">';
        echo '<p class="p-0 m-0 fs-4 text-end price">' . $row["price"] . ' Ft</p>';
        echo '</div>';
        echo '</div>';
        echo '<div class="row pt-1">';
        echo '<div class="col p-0 m-0">';
        echo '<p class="p-0 m-0 fs-6 text-start location">' . $row["location"] . '</p>';
        echo '</div>';
        echo '<div class="col p-0 m-0">';
        echo '<p class="p-0 m-0 fs-6 text-end area">' . $row["area"] . ' m<sup>2</sup></p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "Nincsenek adatok.";
}

$conn->close();
?>
