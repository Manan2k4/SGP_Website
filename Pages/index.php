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
    <title>MyPCStore: Everything PC!</title>
    <link rel="stylesheet" href="Styles/style.css">
</head>

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap">

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">MyPCStore</a>
            </div>
            <ul class="nav-links">
                <li><a href="#">CPU</a></li>
                <li><a href="#">GPU</a></li>
                <li><a href="#">Memory</a></li>
                <li><a href="#">Motherboards</a></li>
                <li><a href="#">Storage</a></li>
                <li><a href="#">Monitors</a></li>
                <li><a href="#">Peripherals</a></li>
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
        <h1>Welcome to MyPCStore!</h1>

        <section class="featured-products">
            <h2>Featured Products</h2>

            <div class="sort-container">
                <label for="sort-by" class="sort-label">Sort By:</label>
                <select id="sort-by" class="sort-dropdown">
                  <option value="name">Name</option>
                  <option value="price">Price</option>
                  <option value="launch">Ratings</option>
                </select>
              </div>

            <div class="product-grid">
                <div class="product-card">
                    <img src="../Images/Product Images/NVIDIA GTX 1660.jpg" alt="NVIDIA GTX 1660 4GB" width="150" height="150">
                    <h3>NVIDIA GTX 1660 4GB</h3>
                    <p>★★★☆☆</p>
                    <p>₹20,549</p>
                    <a href="product.html?product=gtx-1660" class="btn">View Details</a>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="product-card">
                    <img src="../Images/Product Images/Intel Core i5.webp" alt="Intel i5 14th Gen" width="150" height="150">
                    <h3>Intel i5 11th Gen</h3>
                    <p>★★★☆☆</p>
                    <p>₹16,200</p>
                    <a href="product.html?product=intel-i5" class="btn">View Details</a>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="product-card">
                    <img src="../Images/Product Images/NVIDIA RTX 3050.jpg" alt="NVIDIA RTX 3050 Ti 4GB" width="150" height="150">
                    <h3>NVIDIA RTX 3050 Ti 4GB</h3>
                    <p>★★★★☆</p>
                    <p>₹48,000</p>
                    <a href="product.html?product=rtx-3050-ti" class="btn">View Details</a>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="product-card">
                    <img src="../Images/Product Images/Corsair 32 GB.webp" alt="Corsair 32GB (8x4) 3200MHz Ram" width="150" height="150">
                    <h3>Corsair 32GB (8x4) 3200MHz Ram</h3>
                    <p>★★★★☆</p>
                    <p>₹14,500</p>
                    <a href="product.html?product=corsair-32gb" class="btn">View Details</a>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="product-card">
                    <img src="../Images/Product Images/Asus ATX Mobo.jpg" alt="Asus Z790-A Motherboard" width="150" height="150">
                    <h3>Asus Z790-A Motherboard</h3>
                    <p>★★★☆☆</p>
                    <p>₹9600</p>
                    <a href="product.html?product=atx-motherboard" class="btn">View Details</a>
                    <a href="#" class="btn">Add to cart</a>
                </div>
                <div class="product-card">
                    <img src="../Images/Product Images/AMD Ryzen 7.jpg" alt="AMD Ryzen 7" width="150" height="150">
                    <h3>AMD Ryzen 7 9800X3D</h3>
                    <p>★★★☆☆</p>
                    <p>₹70,650</p>
                    <a href="product.html?product=rx-7900-gre" class="btn">View Details</a>
                    <a href="#" class="btn">Add to cart</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-container">
            <div class="footer-category">
                <h4>PRODUCTS</h4>
                <ul>
                    <li><a href="#">CPU</a></li>
                    <li><a href="#">GPU</a></li>
                    <li><a href="#">Memory</a></li>
                    <li><a href="#">Motherboards</a></li>
                    <li><a href="#">Storage</a></li>
                    <li><a href="#">Monitors</a></li>
                    <li><a href="#">Peripherals</a></li>
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
    
</body>
</html>
