<?php 

    if(isset($_POST['login-submit'])) {
        require 'db.inc.php';

        $username = $_POST['login-username'];
        $password = $_POST['login-password'];

        if(empty($username) || empty($password)) {
            header("LocationL ../log_in.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
            $stmt = mysqli_stmt_init($conn);            
            if(!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../login.php?error=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, "ss", $username, $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)) {
                    $passwordCheck = password_verify($password, $row['pwdUsers']);
                    if($passwordCheck == false) {
                        header("Location: ../login.php?error=nouser");
                        exit();
                    } else if ($passwordCheck == true) {
                        session_start();
                        $_SESSION['userID'] = $row['idUsers'];
                        $_SESSION['userUid'] = $row['uidUsers'];
                        $_SESSION['userGroup'] = $row['usergroup'];
                        header("Location: ../index.php?login=success");
                        exit();
                    } else {
                        header("Location: ../login.php?error=wrongpassword");
                        exit();
                    }
                } 
                else {
                    header("Location: ../login.php?error=nouser");
                    exit();
                }

            }
        }
    }
    else {
        header("Location: ../index.php");
    }
?>