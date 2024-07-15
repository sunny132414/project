<!DOCTYPE html>
<?php
include "connection.php";
if(isset($_POST['submit']))
{
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];

$sql="insert into contact_form_info(name,email,phone,comments)values('$name','$email',$phone,'$message')";
$s=mysqli_query($connect,$sql);
if($s)
{
    echo "Data is inserted"."<br>";
}
else
{
    echo "Data is n't inserted".mysqli_error($connect);
}
mysqli_close($connect);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section id="header">
        <h2>Trends</h2>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class='fa fa-close'></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa-solid fa-bag-shopping"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

  

    <section class="container">
        <form name="cForm" action="https://formspree.io/f/xovavnnp" method="post" target="_blank">
            <h3>Get In Touch</h3>
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Email Id" required>
            <input type="text" name="phone" placeholder="Phone No." required>
            <textarea name="message" rows="4" placeholder="How can I help you......"></textarea>
            <button type="submit" name="submit">Submit</button>
        </form>
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
            <p><strong>Address:</strong> Mansarovar, Jaipur</p>
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
            <p>Copyright © 2024 , All right reserved by the Trends.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>


</html>