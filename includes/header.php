<?php
session_start();
?>

<header class="container-fluid bg-dark">
    <div class="row">
        <div class="col">
            <p class="p-0 m-0 text-light" id="">Menu</p>
        </div>
        <div class="col">
            <?php if (isset($_SESSION['username'])) : ?>
                <div class="row d-flex">
                    <div class="col">
                        <p>
                            <?php echo ucfirst($_SESSION['username']); ?>
                        </p>
                    </div>
                    <div class="col">
                        <img src="../src/profile.svg" alt="profile" id="profile">
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!isset($_SESSION['username'])) : ?>
                <p class="p-0 m-0 text-light" id="login_page_button">Jelentkezz be!</p>
            <?php endif; ?>
        </div>




    </div>
</header>