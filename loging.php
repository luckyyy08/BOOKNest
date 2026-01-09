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
            <div class="form-box">
            <form action="login_check.php" method="POST">
                <h3>Welcome Back!</h3>
                <p class="form-subtitle">Sign in to continue your journey.
                </p>

               <span>Email Address</span>
<input name="email" type="email" id="loginEmail" class="box" placeholder="Enter your email address">

<span>Password</span>
<input name="password" type="password" id="loginPass" class="box" placeholder="Enter your password">
<div class="checkbox">
                    <input type="checkbox" id="remember1">
                    
                    <label for="remember1">Keep me signed in</label>
                </div>

<input name="login" type="submit" value="Sign In" id="loginBtn" class="btn">

               
                
            </form>
        </div>

 
            </form>
        </div>
    </section>

</body>
</html>
