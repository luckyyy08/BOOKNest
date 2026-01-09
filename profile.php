<?php
session_start(); // Hi line sarvat mavaachi ahe
include 'config.php'; // Database connection

// Jar user login nasel tar tyala login page var pathva
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
    <title>My Account | BOOKNest</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css"> <style>
        .profile-container { padding: 5rem 9%; display: flex; gap: 2rem; flex-wrap: wrap; }
        .sidebar { flex: 1 1 30rem; border: var(--border); padding: 2rem; border-radius: .5rem; background: #fff; box-shadow: var(--box-shadow); }
        .main-content { flex: 1 1 50rem; border: var(--border); padding: 2rem; border-radius: .5rem; background: #fff; box-shadow: var(--box-shadow); }
        .menu-link { display: block; padding: 1.5rem; font-size: 1.8rem; border-bottom: var(--border); color: var(--black); }
        .menu-link:hover { background: #eee; color: var(--accent); }
        .menu-link i { margin-right: 1rem; color: var(--accent); }
    </style>
</head>
<body>

<?php include 'header.php'; // Header load karnyakarita ?>

<section class="profile-container">
        <div class="main-content">
        <h2 style="font-size: 2.5rem; border-bottom: var(--border); padding-bottom: 1rem;">User Details</h2>
        <div style="margin-top: 2rem; font-size: 1.8rem; line-height: 2;">
            <p><b>Username:</b> <?php echo $user_data['username']; ?></p> <p><b>Email:</b> <?php echo $user_data['email']; ?></p> </div>
        <a href="index.php" class="btn" style="margin-top: 2rem;">Go Back</a>
    </div>
    <div class="sidebar">
        <h3 style="font-size: 2.2rem; margin-bottom: 2rem; text-align: center;">Account Menu</h3>
        <a href="profile.php" class="menu-link"><i class="fas fa-user"></i> My Details</a>
        <a href="wishlist.html" class="menu-item menu-link"><i class="fas fa-heart"></i> My Wishlist</a>
        <a href="cart.php" class="menu-item menu-link"><i class="fas fa-shopping-cart"></i> My Cart</a> <a href="orders.php" class="menu-item menu-link"><i class="fas fa-box"></i> Order History</a>
        <a href="logout.php" class="menu-link" style="color: #e74c3c;"><i class="fas fa-sign-out-alt"></i> Logout</a> </div>


</section>

<?php include 'footer.php'; ?> </body>
</html>