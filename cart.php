<?php
session_start();
include 'config.php';

if(!isset($_SESSION['user_id'])){
    header('location:loging.php');
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Your Cart | BOOKNest</title>
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/BLOG.css">
</head>
<body>
    <?php include 'header.php';?> 
    
    <section class="shopping-cart">
        <h1 class="heading"> <span>Your Cart</span> </h1>
        <div class="box-container">
            <?php 
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){ ?>
                    <div class="box" style="display:flex; align-items:center; gap:2rem; border-bottom:1px solid #eee; padding:2rem;">
                        <img src="<?php echo $row['image']; ?>" height="100">
                        <h3><?php echo $row['book_name']; ?></h3>
                        <p>Price: ₹<?php echo $row['price']; ?></p>
                        </div>
            <?php } 
            } else {
                echo "<p style='text-align:center; font-size:2rem;'>Your cart is empty.</p>";
            } ?>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>