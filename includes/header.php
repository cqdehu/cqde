<?php
session_start();
?>

<div class="container">
    <div class="row">
        <div class="col">
            Menu
        </div>
        <?php if (isset($_SESSION['username'])) : ?>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <p>
                            <?php echo ucfirst($_SESSION['username']); ?>
                        </p>
                    </div>
                    <div class="col">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>