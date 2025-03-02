<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="96x96" rel="icon"
        href="https://img.icons8.com/external-soft-fill-juicy-fish/60/000000/external-appointment-online-services-soft-fill-soft-fill-juicy-fish.png">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Home</title>
</head>

<body>
    <div class="nav_bar">
        <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a class="active" href="login.php">Login</a></li>
            <li><a href="../about.php">About</a></li>
        </ul>
    </div>
    <div class="con_head">
        <p>Login</p>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="l-form">
        <form method="POST" class="form" style="width:33rem">
            <div class="form__div">
                <input type="text" class="form__input" name="Name" id="Name" placeholder="e.g xyz" autocomplete="off">
                <label for="" class="form__label">Name</label>
            </div>
            <br>
            <div class="form__div">
                <input type="text" class="form__input" name="Password" id="Password" placeholder="e.g xyz@123"
                    autocomplete="off">
                <label for="" class="form__label">Password</label>
            </div>

            <br>
            <input type="button" value="Login" style="float:right">
        </form>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="../js/main.js"></script>
    <script src="../js/login.js"></script>
</body>

</html>