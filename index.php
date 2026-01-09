<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookNest | Online Book Store</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
   

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/BLOG.css">
</head>

<body>

     <?php include 'header.php'; ?>

    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="row">

            <!-- Image Left -->
            <div class="image">
                <img src="image/deal-img2.png" alt="Featured Books">
            </div>

            <!-- Text Right -->
            <div class="content">
                <h1>Welcome to BOOKNest</h1>
                <h3>Up to 75% Off</h3>

                <div class="badges">
                    <span><i class="fas fa-truck"></i> Free Delivery</span>
                    <span><i class="fas fa-money-bill"></i> Cash on Delivery</span>
                    <span><i class="fas fa-lock"></i> Secure Payment</span>
                </div>

                <p>Free Shipping on Orders Above ₹500</p>
                <a href="#arrivals" class="btn2">Shop Now</a>
            </div>

        </div>

    </section>
    <!-- home section ends  -->


    <!-- icons section starts  -->

    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-rupee-sign"></i>
            <div class="content">
                <h3>Cash on Delivery</h3>
                <p>Pay when Delivered</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <div class="content">
                <h3>free shipping</h3>
                <p>order over ₹500</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>secure payment</h3>
                <p>100% secure payment</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>easy returns</h3>
                <p>7 days return</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>Customer Care </h3>
                <p>(9 AM – 9 PM)</p>
            </div>
        </div>
    </section>
    <!-- icons section ends -->

    <!-- featured section starts  -->
   <section class="featured" id="featured">

        <h1 class="heading"> <span>featured books</span> </h1>

        <div class="featured-grid">
            
            <div class="box">
                <div class="image"><a href="b1.html"><img src="image/b1.jpg" alt="Panipat"></a></div>
                <div class="content">
                    <h3>Panipat</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="book_name" value="Panipat">
                        <input type="hidden" name="book_price" value="299">
                        <input type="hidden" name="book_image" value="image/b1.jpg">
                        <div class="actions">
                            <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                            <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="image"><a href="b2.html"><img src="image/b2.jpg" alt="Mrityunjay"></a></div>
                <div class="content">
                    <h3>Mrityunjay</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="book_name" value="Mrityunjay">
                        <input type="hidden" name="book_price" value="299">
                        <input type="hidden" name="book_image" value="image/b2.jpg">
                        <div class="actions">
                            <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                            <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="image"><a href="b3.html"><img src="image/b3.jpg" alt="Panipat(Eng)"></a></div>
                <div class="content">
                    <h3>Panipat (English)</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="book_name" value="Panipat(Eng)">
                        <input type="hidden" name="book_price" value="299">
                        <input type="hidden" name="book_image" value="image/b3.jpg">
                        <div class="actions">
                            <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                            <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="image"><a href="b4.html"><img src="image/b4.jpg" alt="Shriman Yogi"></a></div>
                <div class="content">
                    <h3>Shriman Yogi</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="book_name" value="Shriman Yogi">
                        <input type="hidden" name="book_price" value="299">
                        <input type="hidden" name="book_image" value="image/b4.jpg">
                        <div class="actions">
                            <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                            <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="image"><a href="b5.html"><img src="image/b5.jpg" alt="Chhava"></a></div>
                <div class="content">
                    <h3>Chhava</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <form action="add_to_cart.php" method="POST">
                        <input type="hidden" name="book_name" value="Chhava">
                        <input type="hidden" name="book_price" value="299">
                        <input type="hidden" name="book_image" value="image/b5.jpg">
                        <div class="actions">
                            <button type="submit" name="add_to_cart" class="btn">Add to Cart</button>
                            <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- featured section ends -->

    <!-- arrivals section starts  -->
    <section class="arrivals" id="arrivals">
        <h1 class="heading"> <span>new arrivals</span> </h1>
        <div class="arrivals-grid">
            <div class="box">
                <div class="image"><a href="b1.html"><img src="image/b1.jpg" alt="Panipat"></a></div>
                <div class="content">
                    <h3>Panipat</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><a href="b2.html"><img src="image/b2.jpg" alt="Mrityunjay"></a></div>
                <div class="content">
                    <h3>Mrityunjay</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><a href="b3.html"><img src="image/b3.jpg" alt="Swami"></a></div>
                <div class="content">
                    <h3>Swami</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><a href="b4.html"><img src="image/b4.jpg" alt="Shriman Yogi"></a></div>
                <div class="content">
                    <h3>Shriman Yogi</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><a href="b5.html"><img src="image/b5.jpg" alt="Chhava"></a></div>
                <div class="content">
                    <h3>Chhava</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/book-6.png" alt="New Arrival"></div>
                <div class="content">
                    <h3>New Arrival</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/book-7.png" alt="New Arrival"></div>
                <div class="content">
                    <h3>New Arrival</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/book-8.png" alt="New Arrival"></div>
                <div class="content">
                    <h3>New Arrival</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/book-9.png" alt="New Arrival"></div>
                <div class="content">
                    <h3>New Arrival</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="image"><img src="image/book-10.png" alt="New Arrival"></div>
                <div class="content">
                    <h3>New Arrival</h3>
                    <div class="price">₹299 <span>₹349</span></div>
                    <div class="actions">
                        <a href="#" class="btn">Add to Cart</a>
                        <a href="wishlist.html" class="wishlist-btn"><i class="fas fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- arrivals section ends -->

    <!-- deal section starts -->
    <section class="deal" id="deal">
        <div class="content">
            <h3>Deal of the Day</h3>
            <h1>Flat 50% Off on Bestsellers</h1>
            <p>Grab your favorite Marathi history and mythology books at half price. Hurry, limited time offer valid
                till midnight!</p>
            <!-- timer (optional, looks cool for professors) -->
            <div class="timer">
                <span><b>05</b> Hrs</span>
                <span><b>30</b> Min</span>
                <span><b>12</b> Sec</span>
            </div>
            <a href="#arrivals" class="btn">Shop Now</a>
        </div>
        <div class="image">
            <img src="image/deal-img2.png" alt="Deal Books">
        </div>
    </section>
    <!-- deal section ends -->

    <!-- reviews section starts -->
    <section class="reviews" id="reviews">
        <h1 class="heading"><span>What Our Readers Say</span></h1>
        <div class="reviews-grid">

            <div class="review-card">
                <img src="image/pic-1.png" alt="customer">
                <h3>Amit Sharma</h3>
                <p>"Great website for Marathi books! Got my order in just 3 days, packaging was perfect."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>

            <div class="review-card">
                <img src="image/pic-2.png" alt="customer">
                <h3>Neha Patil</h3>
                <p>"Finally found <em>Shriman Yogi</em> at discount. Easy checkout, very smooth experience."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="review-card">
                <img src="image/pic-3.png" alt="customer">
                <h3>Snehal Joshi</h3>
                <p>"The design is simple and clean, I love browsing books here. Very user-friendly!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="review-card">
                <img src="image/pic-4.png" alt="customer">
                <h3>Rohit Kulkarni</h3>
                <p>"<em>Chhava</em> arrived in good condition. Cash on Delivery option is very useful!"</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>

            <div class="review-card">
                <img src="image/pic-5.png" alt="customer">
                <h3>Vikram Pawar</h3>
                <p>"Impressive collection of mythology books. Highly recommend this store to book lovers."</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
            </div>

        </div>
    </section>
    <!-- reviews section ends -->

    <!-- blogs section starts -->
    <section class="blogs" id="blogs">
        <h1 class="heading"><span>Our Blogs</span></h1>

        <div class="blogs-grid">

            <div class="blog-card">
                <img src="image/blog-1.png" alt="Chhava Review">
                <div class="content">
                    <h3>Why You Must Read ‘Chhava’ by Shivaji Sawant</h3>
                    <p>A masterpiece in Marathi literature, narrating the inspiring life of Sambhaji Maharaj.</p>
                    <a href="blog1.html" class="btn">Read More</a>
                </div>
            </div>

            <div class="blog-card">
                <img src="image/blog-2.png" alt="Shriman Yogi">
                <div class="content">
                    <h3>Top 5 Marathi History Books You Should Not Miss</h3>
                    <p>From Shriman Yogi to Panipat, these books bring India’s glorious past to life.</p>
                    <a href="blog2.html" class="btn">Read More</a>
                </div>
            </div>

            <div class="blog-card">
                <img src="image/blog-3.png" alt="Reading Habits">
                <div class="content">
                    <h3>Why Reading Daily Improves Your Thinking</h3>
                    <p>Discover how just 20 minutes of reading can improve focus, creativity and confidence.</p>
                    <a href="blog3.html" class="btn">Read More</a>
                </div>
            </div>

            <div class="blog-card">
                <img src="image/blog-4.png" alt="Mythology Stories">
                <div class="content">
                    <h3>Indian Mythology: Stories That Inspire Generations</h3>
                    <p>Explore epics like Ramayan, Mahabharat, and their timeless lessons for today.</p>
                    <a href="blog4.html" class="btn">Read More</a>
                </div>
            </div>

            <div class="blog-card">
                <img src="image/blog-5.png" alt="Festival Offers">
                <div class="content">
                    <h3>Special Diwali Book Sale – Save up to 30%</h3>
                    <p>Celebrate this Diwali with knowledge and stories. Grab your favorite books at discount!</p>
                    <a href="blog5.html" class="btn">Read More</a>
                </div>
            </div>

        </div>
    </section>
    <!-- blogs section ends -->

   
    <?php include 'footer.php'; ?>
    <!-- footer section ends -->
   
</body>

</html>