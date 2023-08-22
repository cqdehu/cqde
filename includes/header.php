<?php
session_start();
?>

<header class="container-fluid bg-dark">
    <div class="row">
        <div class="col">
            Menu
        </div>
        <?php if (isset($_SESSION['username'])) : ?>
            <div class="col">
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
            </div>
        <?php endif; ?>
    </div>
</header>