<?php
session_start()
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <?php if (isset($_SESSION['username'])) : ?>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>


</body>

</html>