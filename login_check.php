<?php
session_start();
include 'config.php'; // Database connection

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Database madhe user shodha
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        
        // Password verify kara
        if(password_verify($password, $user['password'])){
            // Session madhe data save kara
            $_SESSION['user_id'] = $user['id']; // Cart sathi ID mahatvacha ahe
            $_SESSION['user_name'] = $user['username']; 
            
            header('location:index.php'); // Home page var pathva
        } else {
            echo "<script>alert('Chukicha Password!'); window.location='loging.php';</script>";
        }
    } else {
        echo "<script>alert('Account sapdle nahi, pahile register kara!'); window.location='create.php';</script>";
    }
}
?>