<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>

    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <div class="container">
        <img src="img/dark-logo.png" class="logo" alt="">
        <form action="./includes/login.inc.php" method="POST">
            <input type="text" name="login-username" autocomplete="off" id="name" placeholder="name">
            <input type="password" name="login-password" autocomplete="off" id="password" placeholder="password">
            <br>
            <button name="login-submit" class="submit-btn">Log in</button>
        </form>
            <a href="signup.php" class="link">Does not have an account? Sign up here</a>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/login.js"></script>

</html>