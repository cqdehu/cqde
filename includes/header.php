<?php
session_start()
?>

<div class="container">
    <div class="row">
        <?php if (isset($_SESSION['username'])): ?>
        <div class="col">
            <p>
                <?php echo $_SESSION['username']; ?>
            </p>
        </div>
        <?php endif; ?>
        <div class="col">
            <p>aawdawd</p>
        </div>
    </div>
</div>
