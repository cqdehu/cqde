<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>

<body>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>


</body>

</html>