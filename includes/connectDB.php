<?php

$firstName = $_POST['firstName'];
$email = $_POST['mail'];
$message = $_POST['message'];

//Database Conenction

$conn = new mysqli('localhost', 'root', '', 'clothesDB');

    if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        
        $stmt = $conn->prepare("INSERT INTO emails(Name, Email, Message) VALUES ('$firstName', '$email', '$message')");
        $stmt->execute();
        $stmt->close();
        $conn->close();
        header("Location: ../contact.php");
    }

?>