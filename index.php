
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Responsive full website</title>
    <!-- CSS-link -->
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

    <header>
        <a href="#" class="logo"><img src="image/logo.png" alt=""></a>

        <ul class="navmenu">
            <li><a href="#home">home</a></li>
            <li><a href="#">shop</a></li>
            <li><a href="#products">products</a></li>
            <li class='loginbtn' onclick="document.getElementById('login-form').style.display='block'" style="width:auto;" ><a href="#">login</a></li>
        </ul>

        <div class="search-box">
            <input type="text" id="search-input" placeholder="Search a product...">
            <a href="#"><i class='bx bx-search' id="search-icon"></i></a>
            <i id="close-icon" class="bx bx-x"></i>
          </div>

        <div class="nav-icon">
            <a href="#"><i class='bx bx-user' ></i></a>
            <a href="#"></a><i class="bx bx-bell bx-sm"></i></a>
            <a href="#"><i class="bx bx-cart-add bx-sm"></i></a>
        </div>
    </header>

    <div id='login-form'class='login-page'>
        <div class="form-box">
            <div class='button-box'>
                <div id='btn'></div>
                <button type='button'onclick='login()'class='toggle-btn'>Log In</button>
                <button type='button'onclick='register()'class='toggle-btn'>Register</button>
            </div>
            <form id='login' class='input-group-login' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <input type='email' name="Email" class='input-field' placeholder='email'>
                <input type='password' name="password" class='input-field' placeholder='Password'>
                <input type='checkbox' class='check-box'><span>Remember Password</span>
                <button type='submit' class='submit-btn'><a href="#home">Login</a></button>
            </form>
              
     <form id='register' class='input-group-register' action="process_form.php" method="POST">
        <select id='user-type' class='input-field1' style='color: rgb(167, 164, 164); background-color: transparent; border: none;' id="user-type" onchange="updatePlaceholder(this.value)">
            <option value='' disabled selected>Create an Account as</option>
            <option value='buyer'>Buyer</option>
            <option value='supplier'>Supplier</option>
        </select>
         <input type='name' name="Full_Name" class='input-fields'placeholder='Full Name' id="input-field1">
         <input type='email' name="Email"class='input-fields'placeholder='Email' id="input-field2">
         <input type='number' name="Contact"class='input-fields'placeholder='Contact Number' id="input-field3">
         <input type='address' name="Address" class='input-fields'placeholder='Complete Address' id="input-field4">
         <input type='password' name="password" class='input-fields'placeholder='Enter Password' id="input-field5">
         <input type='Confirm_Password' name="password2" class='input-fields'placeholder='Confirm Password'  id="input-field6">
         <input type='checkbox'class='check-box1'><span>I agree to the terms and conditions</span>
        <button type='submit'class='submit-btn1'>Register</button>
         </form>
        </div>
    </div>
</div>

    <section class="main-home" id="home">
        <div class="main-text">
            <h5>Gamers Collection</h5>
            <h1>Get yours now! <br> Collection 2023</h1>
            <p>In techknow, we know what tech you need</p>

            <a href="#login-form" class="main-btn">Shop Now <i class='bx bx-right-arrow-alt' ></i></a>
        </div>

        <div class="down-arrow">
            <a href="#trending" class="down"><i class='bx bx-down-arrow-alt' ></i></a>
        </div>
    </section>

    <!-- trending-products-section -->
    <section class="trending-product" id="trending">
        <div class="center-text">
            <h2>Our Trending products</h2>
        </div>

        <div class="products" id="products">
            <div class="row">
                <img src="image/1.jpg" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Half Running Set</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/2.jpg" alt="">
                <div class="product-text">
                    <h5>New</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Formal Men Lowers</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/3.jpg" alt="">

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Half Running Suit</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/4.jpg" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Half Fancy Lady Dress</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/5.jpg" alt="">

                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Flix Flox Jeans</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/6.jpg" alt="">
                <div class="product-text">
                    <h5>Hot</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Fancy Salwar Suits</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/7.jpg" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Printed Straight Kurta</h4>
                    <p>$99 - $129</p>
                </div>
            </div>

            <div class="row">
                <img src="image/8.jpg" alt="">
                <div class="product-text">
                    <h5>Sale</h5>
                </div>
                <div class="heart-icon">
                    <i class='bx bx-heart'></i>
                </div>
                <div class="ratting">
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bx-star'></i>
                    <i class='bx bxs-star-half' ></i>
                </div>

                <div class="price">
                    <h4>Collot Full Dress</h4>
                    <p>$99 - $129</p>
                </div>
            </div>
        </div>

    </section>

    <!-- Client-Review-section -->

    <section class="client-reviews">
        <div class="reviews">
            <h3>Customers Reviews</h3>
            <img src="image/team-1.jpg" alt="">
            <p>What a good experience. I bought my pc here and all I can say is that it's awesome. The specs are amazing and the service is indeed commendable. The way they communicate is a lit. Never regret buying in this shop hundred percent</p>

                <h2>Mark Jevenue</h2>
                <p>CEO of Addle</p>
        </div>
    </section>

    <!-- update-news-section -->
    <section class="Update-news">
        <div class="up-center-text">
            <h2>New Updates</h2>
        </div>

        <div class="update-cart">
            <div class="cart">
                <img src="image/bl-1.png" alt="">
                <h5>26 jan 2022</h5>
                <h4>Let's Start bring sale on this summer vacation.</h4>
                <p>The wait is almost over, we hear you and we want you to be happy. Lets take this chance and buy what you want in techknow</p>

                <h6>Continue Reading..</h6>
            </div>

            <div class="cart">
                <img src="image/bl-2.png" alt="">
                <h5>26 jan 2022</h5>
                <h4>Let's Start bring sale on this summer vacation.</h4>
                <p>Worries no more, we got your back. Grab the opportunity to enjoy this summer sale. Buy your dream laptops, smart watch and others. In here we know what you need</p>

                <h6>Continue Reading..</h6>
            </div>

            <div class="cart">
                <img src="image/bl-3.png" alt="">
                <h5>26 jan 2022</h5>
                <h4>Let's Start bring sale on this summer vacation.</h4>
                <p>Get ready with our greatest summer sale. We ensure that you will save more, so shop now and be part of the techknow customers</p>

                <h6>Continue Reading..</h6>
            </div>
        </div>
    </section>

    <!-- contact-section -->
    <section class="contact">
        <div class="contact-info">
            <div class="first-info">
                <img src="image/logo.png" alt="">

                <p>3245 Grant Street Longview, <br> TX united kingdom 765378</p>
                <p>01601348732</p>
                <p>saidulahmed3080@gmail.com</p>

                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter' ></i></a>
                    <a href="#"><i class='bx bxl-instagram' ></i></a>
                    <a href="#"><i class='bx bxl-youtube' ></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                </div>
            </div>

            <div class="second-info">
                <h4>Support</h4>
                <p>Contact us</p>
                <p>About page</p>
                <p>Size Guide</p>
                <p>Shopping & Resturns</p>
                <p>Privacy</p>
            </div>

            <div class="third-info">
                <h4>Shop</h4>
                <p>Laptops</p>
                <p>Computers</p>
                <p>Cellphones</p>
                <p>Smart Watches</p>
                <p>Headphones</p>
            </div>

            <div class="fourth-info">
                <h4>Company</h4>
                <p>About</p>
                <p>Blog</p>
                <p>Affiliate</p>
                <p>Login</p>
            </div>

            <div class="five">
                <h4>Subscribe</h4>
                <p>Receive Updates, Hot Deals, Discounts Sent Straight In Your Inbox Daily</p>
                <p>Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit. Eum, Debitis.</p>
                <p>Receive Updates, Hot Deals, Discounts Sent Straight In Your Inbox Daily</p>
            </div>
        </div>
    </section>

    <script src="java.js"></script>
    
</body>
</html>

