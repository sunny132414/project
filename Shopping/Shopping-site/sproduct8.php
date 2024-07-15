<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's do Shopping</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section id="header">
        <h2>Resto</h2>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class='fa fa-close'></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img/Product/n1.jfif" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/Product/n1.jfif" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/Product/n3.jfif" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/Product/n2.jfif" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col">
                    <img src="img/Product/n4.jpg" width="100%" class="small-img" alt="">
                </div> 
            </div>
        </div>
        <div class="single-pro-details">
            <h5>Home / Dresses</h5>
            <form name="rd" action="cart.php" method="post">
            <h4>Indo Westorn Dress</h4>
            <h2>$78</h2>
            <select name="s2[]">
                <option name="s2[]" value="Select Size">Select Size</option>
                <option name="s2[]" value="S">S</option>
                <option name="s2[]" value="M">M</option>
                <option name="s2[]" value="L">L</option>
                <option name="s2[]" value="XL">XL</option>
                <option name="s2[]" value="XXL">XXL</option>
            </select>
            <input type="number" value="1" name="s1">
            <button type="submit" onclick="window.alert('Added to Cart');" class="normal" name="submit">Add to Cart</button>
        </form>
            <h4>Product Details</h4>
            <span>Our High Quality dress Indo Westorn Dress for men are made from high grade 97%Cotton 3%Spandex,good capability of tenderness,air permeability,feels soft and comfy,solid enough and it's hard to beat. Stylish and Appealing design: Our mens dress Indo Westorn Dress are made based on USA regular fit casual button-down shirt size, Fits true to size.Spread collar,buttoned cuff,You can also refer to our size chart on pictures and details. Good quality construction,Easy care: This men's dress shirt is well made,nicely stitched and detailed,contrast on inner collar and cuff makes you different from around,you can dress it tucked or un-tucked.Easy to match and easy to get compliments,fill your wardrobe now!</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro" onclick="window.location.href='sproduct3.php'">
                <img src="img/Product/sw.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct5.php'">
                <img src="img/Product/sw6.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct6.php'">
                <img src="img/Product/sw9.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
            <div class="pro" onclick="window.location.href='sproduct7.php'">
                <img src="img/Product/sw3.jpg" alt="">
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut Jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$78</h4>
                </div>
                <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
            </div>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletter</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers</span>.</p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button>Sign Up</button>
        </div>
    </section>

    <footer  class="section-p1">
        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address:</strong> 83 Tonk Road, Jaipur</p>
            <p><strong>Phone:</strong> +91 9856234568</p>
            <p><strong>Hours:</strong> 10:00 - 06:00, Mon - Fri</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jfif" alt="">
                <img src="img/pay/google_paly_btn.png" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/payment-gateways.jfif" alt="">
        </div>


        <div class="copyright">
            <p>Copyright © 2023 , All right reserved by the Resto.</p>
        </div>
    </footer>

    <script>
        let MainImg = document.getElementById("MainImg");
        let smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>

    <script src="script.js"></script>
</body>


</html>