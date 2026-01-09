<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/BLOG.css">
</head>
<body>
    


 <!-- header section starts  -->

    <header class="header">

        <div class="header-1">

            <a href="index.php" class="logo"> <i class="fas fa-book"></i> BOOKNest</a>

            <form action="" class="search-form">
                <input type="search" name="" placeholder="search here..." id="search-box">
                <label for="search-box" class="fas fa-search"></label>
            </form>

<div class="icons">
    <div id="search-btn" class="fas fa-search"></div>
    
    <?php if(isset($_SESSION['user_name'])): ?>
        <span id="user-name" style="font-size: 1.5rem; color: #2C3E50; font-weight: 500; margin-right: 1rem;">
            Hi, <?php echo explode(' ', $_SESSION['user_name'])[0]; ?>
        </span>
        <a href="profile.php" id="user-btn" class="fas fa-user" title="My Profile"></a>
    <?php else: ?>
        <a href="create.php" id="user-btn" class="fas fa-user"></a>
    <?php endif; ?>

    <!-- <a href="wishlist.html" class="fas fa-heart"></a>
    <a href="cart.php" class="fas fa-shopping-cart"></a> -->
</div>
    </header>
    <!-- header section ends -->
     </body>
</html>
