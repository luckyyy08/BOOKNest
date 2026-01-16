<?php
session_start();
include 'config.php'; // Database connection

// User login nasel tar login page var pathva
if(!isset($_SESSION['user_id'])){
    header('location:loging.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$user_query = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
$user_data = mysqli_fetch_assoc($user_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Account | BOOKNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/profile.css"> </head>
<body>

<?php include 'header.php'; // Header load karnyakarita ?>

<section class="profile-dashboard">
    <div class="profile-container">
        
        <div class="main-card">
            <div class="card-header">
                <h2><i class="fas fa-id-card"></i> User Details</h2>
            </div>
            <div class="card-body">
                <div class="detail-row">
                    <span class="label">Username:</span>
                    <span class="value"><?php echo $user_data['username']; ?></span>
                </div>
                <div class="detail-row">
                    <span class="label">Email:</span>
                    <span class="value"><?php echo $user_data['email']; ?></span>
                </div>
                <div class="detail-row">
                    <span class="label">Status:</span>
                    <span class="status-badge">Active Member</span>
                </div>
                <div class="action-btns">
                    <a href="index.php" class="btn">Go Back</a>
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <h3>Account Menu</h3>
            <nav>
                <a href="profile.php" class="active"><i class="fas fa-user"></i> My Details</a>
                <a href="wishlist.html"><i class="fas fa-heart"></i> My Wishlist</a>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i> My Cart</a>
                <a href="orders.php"><i class="fas fa-box"></i> Order History</a>
                <a href="logout.php" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </nav>
        </div>

    </div>
</section>

<?php include 'footer.php'; ?> </body>
</html>