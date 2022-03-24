<?php
session_start();
?>

<nav class="navbar">
    <div class="nav">
        <img src="img/dark-logo.png" class="brand-logo" alt="">
        <?php
        if (!isset($_SESSION['userUid'])) {
            echo ' 
            <div class="nav-items">
                <a href="signup.html"><img src="img/user.png" alt=""></a>
                <a href="login.php">LogIn</a>
                <a href="signup.php">SignUp</a>
            </div>';
        };
        if (isset($_SESSION['userUid'])) {
            if ($_SESSION['userGroup'] > 0) {
                echo '
                <div class="nav-items">
                    <img class="nav-img" src="img/user.png" alt="">
                    <a href="dashboard.php">Dashboard</a>
                 </div>';
                echo '
                       <div class="nav-items">
                          <p> Logged in as ' . '<span style="color: gray;">' . $_SESSION['userUid']   . '</span>' . '</p>';
                echo ' <form action="includes/logout.inc.php" method="post">
                          <button class="logout-button" name="logout-button"> Logout </button>
                          </form>
                      </div>';
            };
            if ($_SESSION['userGroup'] == 0) {
                echo '
                        <div class="nav-items">
                           <p> Logged in as ' . '<span style="color: gray;">' . $_SESSION['userUid']   . '</span>' . '</p>';
                echo ' <form action="includes/logout.inc.php" method="post">
                           <button class="logout-button" name="logout-button"> Logout </button>
                           </form>
                       </div>';
            }
        }
        ?>
    </div>
    <ul class="links-container">
        <li class="link-item"><a href="index.php" class="link">home</a></li>
        <li class="link-item"><a href="Product.php" class="link women">products</a></li>
        <li class="link-item"><a href="aboutus.php" class="link men">about us</a></li>
        <li class="link-item"><a href="contact.php" class="link kids">contact</a></li>
    </ul>
</nav>