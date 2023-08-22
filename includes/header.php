<?php
if (!isset($_SESSION['username'])) {
    exit();
}
?>

<div class="container">
    <div class="row">
        <div class="col">
            <p>
                <?php echo $_SESSION['username']; ?>
            </p>
        </div>
        <div class="col">
            <img src="" alt="">
        </div>
    </div>
</div>