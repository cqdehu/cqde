<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

while (true) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Kapcsolódási hiba: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM school";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $response = "";
        while ($row = $result->fetch_assoc()) {
            $response .= "Name: " . $row["name"] . "<br>";
            $response .= "Price: " . $row["price"] . "<br>";
            $response .= "Location: " . $row["location"] . "<br>";
            $response .= "Area: " . $row["area"] . "<br>";
            $response .= "<hr>";
        }
        echo "data: " . json_encode(["message" => $response]) . "\n\n";
        flush();
    }

    $conn->close();
    
    sleep(1); // Várakozás egy másodpercig, majd folytatjuk a következő körrel
}
?>
