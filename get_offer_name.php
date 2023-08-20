<select name="" class="form-select">
    <option value="" selected>Válassz...</option>

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
            <option value="<?php echo $row['name'] ?>" id="<?php echo $row['name'] ?>"><?php echo mb_strtoupper($row["name"], 'UTF-8') ?></option>
    <?php
        }
    } else {
        echo "Nincsenek adatok.";
    }

    $conn->close();
    ?>

</select>