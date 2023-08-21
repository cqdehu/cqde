<?php

session_start();

// Ellenőrizzük, hogy a felhasználó be van-e jelentkezve
if (!isset($_SESSION["username"])) {
    header("Location: index");
    exit(); // Fontos: Azonnal leállítjuk a további kód végrehajtását
}
//

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style/font.css">
    <link rel="stylesheet" href="/style/style.css">
    <script src="main.js"></script>
</head>

<body class="p-4 m-0">

    <div aria-live="polite" aria-atomic="true" class="bg-body-secondary position-relative bd-example-toasts rounded-3">
        <div class="toast-container top-0 end-0" id="toastPlacement">

        </div>
    </div>

    <header class="container">
        <div class="row">
            <div class="col p-0 m-0 text-start">
                <p class="p-0 m-0 fs-4 text-light"><?php echo ucfirst($_SESSION["username"]); ?></p>
            </div>
            <div class="col d-flex justify-content-end align-items-center p-0 m-0 text-end">
                <img src="/src/profile.svg" alt="" height="20px">
            </div>
        </div>
    </header>


    <!---->
    <main class="container mt-4">
        <div class="row gap-4 text-light" id="offers">
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
                        <div class="card rounded-4 border-0 offer" id="<?php echo $row['id'] ?>">
                            <span class="position-relative"><span class="position-absolute top-0 end-0">
                                    <span class="badge rate-bg rate m-3 px-3 fs-6 rounded-4"><?php echo $row['rate'] ?></span>
                                </span>
                            </span>
                            <img src="/src/img.png" alt="" class="rounded-top-4 border-0">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col p-0 m-0">
                                            <p class="p-0 m-0 fs-4 text-start name"><?php echo $row['name'] ?></p>
                                        </div>
                                        <div class="col p-0 m-0">
                                            <p class="p-0 m-0 fs-4 text-end price"><?php echo $row['price'] ?> Ft</p>
                                        </div>
                                    </div>
                                    <div class="row pt-2">
                                        <div class="col p-0 m-0">
                                            <p class="p-0 m-0 fs-6 text-start location"><?php echo $row['location'] ?></p>
                                        </div>
                                        <div class="col p-0 m-0">
                                            <p class="p-0 m-0 fs-6 text-end area"><?php echo $row['area'] ?><sup>2</sup></p>
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
        </div>
    </main>
    <!---->

</body>

</html>