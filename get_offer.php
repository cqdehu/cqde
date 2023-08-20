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
?>
        <div class="col p-0 m-0">
            <div class="card rounded-4 border-0 offer" id="SZEGED"><span class="position-relative"><span class="position-absolute top-0 end-0"><span class="badge rate-bg rate m-3 px-3 fs-6 rounded-4"><?php echo $row['rate'] ?></span></span></span><img src="/src/img.png" alt="" class="rounded-top-4 border-0">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col p-0 m-0">
                                <p class="p-0 m-0 fs-4 text-start name"><?php echo $row['name']?></p>
                            </div>
                            <div class="col p-0 m-0">
                                <p class="p-0 m-0 fs-4 text-end price"><?php echo $row['price']?> Ft</p>
                            </div>
                        </div>
                        <div class="row pt-2">
                            <div class="col p-0 m-0">
                                <p class="p-0 m-0 fs-6 text-start location"><?php echo $row['location']?></p>
                            </div>
                            <div class="col p-0 m-0">
                                <p class="p-0 m-0 fs-6 text-end area"><?php echo $row['area']?><sup>2</sup></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
} else {
    echo "Nincsenek ajánlatok";
}

$conn->close();
?>