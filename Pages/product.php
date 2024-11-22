<?php
session_start();
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // User is logged in, proceed with your code
    $username =  $_SESSION['fname'];
    echo "<script>
    
      document.addEventListener('DOMContentLoaded', function() {
          const userDetails = document.getElementsByClassName('userinfo')[0];
          const photoholder = document.getElementsByClassName('photoholder')[0];
       
          var USERname = '" . $username. "';
          if (userDetails) {
              userDetails.style.display = 'none';
              photoholder.style.display = 'inline';
              
          }
});
      </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="product-name-title"></titleid>>Product Details</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">MyPCStore</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php#cpu">CPU</a></li>
                <li><a href="index.php#gpu">GPU</a></li>
                <li><a href="index.php#memory">Memory</a></li>
                <li><a href="index.php#mobo">Motherboards</a></li>
                <li><a href="index.php#storage">Storage</a></li>
                <li><a href="index.php#monitors">Monitors</a></li>
                <li><a href="index.php#peripherals">Peripherals</a></li>
            </ul>
            <div class="auth-buttons">
                <button class="your-cart-btn">
                    <img src="../Images/Cart.png" alt="Your Cart"> Your Cart</button>  
                    <div class="userinfo">
                        <a href="connect/index.php" class="btn">Register</a>
                        <a href="connect/login.php" class="btn">Login</a>
                    </div>
                    <div class="photoholder"><img src="prof.jpg" id="prof2"></div>
            </div>
        </nav>
    </header>

    <main>
        <section class="product-details">
            <div class="product-image">
                <img id="product-img" src="" alt="Product Image" width="200" height="200">
            </div>
            <div class="product-info">
                <h1 id="product-name">Product Name</h1>
                <p id="product-rating">No ratings yet</p>
                <p id="product-price">₹0</p>
                <p id="product-description">Product Description</p>
                <button href="#" class="btn" id="add-to-cart-btn">Add to Cart</button>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-category">
                <h4>PRODUCTS</h4>
                <ul>
                <li><a href="index.php#cpu">CPU</a></li>
                <li><a href="index.php#gpu">GPU</a></li>
                <li><a href="index.php#memory">Memory</a></li>
                <li><a href="index.php#mobo">Motherboards</a></li>
                <li><a href="index.php#storage">Storage</a></li>
                <li><a href="index.php#monitors">Monitors</a></li>
                <li><a href="index.php#peripherals">Peripherals</a></li>
                </ul>
            </div>
            <div class="footer-category">
                <h4>COMPANY</h4>
                <ul>
                    <li><a href="company.html?product=tos">TOS</a></li>
                    <li><a href="company.html?product=privacy-policy">Privacy Policy</a></li>
                    <li><a href="company.html?product=your-data">Your Data</a></li>
                </ul>
            </div>
            <div class="footer-category">
                <h4>ACCOUNT</h4>
                <ul>
                    <li><a href="register.html">Sign up!</a></li>
                    <li><a href="login.html">Log in</a></li>
                </ul>
            </div>
        </div>
        <p>&copy; 2024 MyPCStore. All rights reserved.</p>
    </footer>

    <script src="../JavaScript/products.js"></script>
</body>
</html>
