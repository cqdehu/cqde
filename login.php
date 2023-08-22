<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

    <?php include './includes/header.php' ?>

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
                <input type="password" class="form-control" id="password_input">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-dark" id="login_button" >LOGIN</button>
            </div>
        </div>
    </main>

</body>
</html>