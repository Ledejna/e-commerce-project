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
        <form action="includes/signup.inc.php" method="post">
            <input type="text" autocomplete="off" name="username" id="name" placeholder="name">
            <input type="email" autocomplete="off" name="email" id="email" placeholder="email">
            <input type="password" autocomplete="off" name="password" id="password" placeholder="password">
            <input type="checkbox" checked class="checkbox" id="terms-and-cond">
            <label for="terms-and-cond">agree to our <a href="">terms and conditions</a></label>
            <br>
            <input type="checkbox" class="checkbox" id="notification">
            <label for="notification">recieve upcoming offers and events mails</a></label>
            <button class="submit-btn" name="signup-submit">create account</button>
        </form>


        <a href="login.php" class="link">already have an account? Log in here</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/signup.js"></script>

</html>