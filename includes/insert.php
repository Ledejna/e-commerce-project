<?php

if(isset($_POST['insert-submit'])) {
    require 'dbh.inc.php';

    $username = $_POST['insert-username'];
    $email = $_POST['insert-email'];
    $password = $_POST['insert-password'];
    $usergroup = $_POST['insert-usergroup'];

if(empty($username) || empty($email) || empty($password)) {
    header("Location: ../dashboard.php?error=emptyFields");
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../dashboard.php?error=invalidUserName");
}    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../sign_up.php?error=invalidEmail&username=".$username);
    exit();
}    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../sign_up.php?error=invalidUsername&username=".$email);
    exit();
} else {
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../dashboard.php?error=sqlerror");
        exit();
        var_dump($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);

        if($resultCheck > 0) {
            header("Location: ../dashboard?error=usertaken&email=" . $email);
            exit();
        } else {
            $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, usergroup) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($conn);

            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../dashboard.php?error=sqlerror");
                exit();
                echo var_dump($conn);
            }
             else {
                 $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                 mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPassword, $usergroup);
                 mysqli_stmt_execute($stmt);
                 header("Location: ../dashboard.php?user-inserted");
                 exit();
             }
        }
    }
}
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    header("Location: ../dashboard.php?connectionsuccesful");
    exit();
}
?>