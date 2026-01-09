<?php
session_start();
include 'config.php'; 

if(isset($_POST['add_to_cart'])){
    // युजर लॉगिन नसेल तर त्याला सांगा की आधी लॉगिन कर
    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('Please login first to add items to cart!'); window.location='loging.php';</script>";
        exit();
    }

    $user_id = $_SESSION['user_id']; 
    $name = $_POST['book_name'];
    $price = $_POST['book_price'];
    $image = $_POST['book_image'];

    // डेटाबेसमध्ये एंट्री करा
    $query = "INSERT INTO cart (user_id, book_name, price, image) VALUES ('$user_id', '$name', '$price', '$image')";
    
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Book added to cart!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>