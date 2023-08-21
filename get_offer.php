<?php
$servername = "localhost";
$username = "u142909563_LEAdmin";
$password = "LEadmin23";
$dbname = "u142909563_LEARN";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kapcsolódási hiba: " . $conn->connect_error);
}

$selected_offer = $_POST['id'];

$sql = "SELECT * FROM `school` WHERE `id` = '$selected_offer'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
?>
        <main class="container">
            <div class="row">
                <div class="col p-0 m-0">
                    <div class="card rounded-0 border-0" id="<?php echo $row['id'] ?>">
                        <span class="position-relative">
                            <span class="position-absolute top-0 end-0">
                                <span class="badge rate-bg rate m-4 px-3 fs-6 rounded-4"><?php echo $row['rate'] ?></span>
                            </span>
                        </span>
                        <img src="/src/img.png" alt="" class=" border-0">
                        <div class="card-body p-4">
                            <div class="container">
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-4 text-start name"><?php echo $row['name'] ?></p>
                                    </div>
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-4 text-end price"><?php echo $row['price'] ?></p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-6 text-start location"><?php echo $row['location'] ?></p>
                                    </div>
                                    <div class="col-2 p-0 m-0">
                                        <p class="p-0 m-0 fs-6 text-end area"><?php echo $row['area'] ?><sup>2</sup></p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-5 name">Leírás</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-6 price"><?php echo $row['description'] ?></p>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-5 name">Jellemzők</p>
                                    </div>
                                </div>

                                <div class="row mb-4 gap-4">
                                    <div class="col-2">
                                        <div class="row border bg-light rounded-4 p-2">
                                            <div class="col p-0 m-0 d-flex justify-content-center align-items-center gap-2">
                                                <img src="/src/profile_dark.svg" alt="" height="15">
                                                <p class="p-0 m-0 text-center"><?php echo $row['person'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="row border bg-light rounded-4 p-2">
                                            <div class="col p-0 m-0 d-flex justify-content-center align-items-center gap-2">
                                                <img src="/src/bed.svg" alt="" height="15">
                                                <p class="p-0 m-0 text-center"><?php echo $row['bed'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row border bg-light rounded-4 p-2">
                                            <div class="col p-0 m-0 d-flex justify-content-center align-items-center gap-2">
                                                <img src="/src/area.svg" alt="" height="15">
                                                <p class="p-0 m-0 text-center"><?php echo $row['area'] ?><sup>2</sup></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="row border bg-light rounded-4 p-2">
                                            <div class="col p-0 m-0 d-flex justify-content-center align-items-center gap-2">
                                                <img src="/src/wifi.svg" alt="" height="15">
                                                <p class="p-0 m-0 text-center">Wifi</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-5 name">Költségek</p>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 location">Bérleti díj</p>
                                    </div>
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 location">Közös költség</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 price"><?php echo $row['rent'] ?></p>
                                    </div>
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 price"><?php echo $row['cost'] ?></p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 location">Rezsi</p>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 price"> A víz, gáz és villany fogyasztás alapján kerül
                                            elszámolásra.</p>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col p-0 m-0">
                                        <p class="p-0 m-0 fs-5 name">Képek</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col p-0 m-0">
                                        <img src="/src/img.png" alt="" style="width: 100%;" class="rounded-4">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php
    }
} else {
    echo "Az ajánlat nem elérhető";
}

$conn->close();
?>