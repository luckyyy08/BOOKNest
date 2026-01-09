<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // Password Secure karane

    $sql = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$pass')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration Successful!";
        header("Location: login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>