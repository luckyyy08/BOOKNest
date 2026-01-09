<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest | Online Book Store</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/blog.css">

</head>

<body>

    <!-- header section starts  -->
    <header class="header">
        <div class="header-1">
            <a href="index.html" class="logo"> <i class="fas fa-book"></i> BOOKNest</a>
        </div>
    </header>
    <!-- header section ends -->

    <!-- login/register form  -->
    <section class="auth-container">

        <!-- Sign In -->
        <div class="form-box">
            <img class="ps" src="image/deal-img2.png" alt="">
        
        </div>

        <!-- Register -->
        <div class="form-box">
    <form action="register.php" method="POST">
        <h3>Create an Account</h3>
        <p class="form-subtitle">Join us and start exploring.</p>

        <span>Full Name</span>
        <input type="text" id="regName" name="username" required class="box" placeholder="Enter your full name">

        <span>Email Address</span>
        <input type="email" id="regEmail" name="email" required class="box" placeholder="Enter a valid email address">

        <span>Password</span>
        <input type="password" id="regPass" name="password" required class="box" placeholder="Create a strong password">

        <span>Confirm Password</span>
        <input type="password" id="regCPass" name="cpassword" required class="box" placeholder="Re-enter your password">

        <div class="checkbox">
            <input type="checkbox" required id="terms">
            <label for="terms">I agree to the Terms & Conditions</label>
        </div>

        <input type="submit" value="Register" name="register" class="btn">
        <p class="form-subtitle">Already registered? <a href="loging.php">Login.</a></p>
    </form>
</div>
    </section>


</body>
</html>
