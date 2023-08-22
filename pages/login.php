<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/font.css">
</head>
<body>

    <?php include '../includes/toast_container' ?>

    <main class="container">
        <div class="row">
            <div class="col">
                <p class="p-0 m-0 fs-4">LOGIN</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="p-0 m-0">USERNAME</p>
                <input type="text" class="form-control" id="username_input">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="p-0 m-0">PASSWORD</p>
                <input type="text" class="form-control" id="password_input">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-dark" id="login_button">LOGIN</button>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/script.js"></script>

</body>
</html>