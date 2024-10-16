<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Website Header</title>
</head>
<body>
    <div class="navbar">
        <?php if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true): ?>
            <!-- Display user avatar and info if logged in, using existing styling classes -->
            <div class="user-info login-btn signup-btn">
                <img src="<?php echo $_SESSION['avatar']; ?>" alt="User Avatar" class="avatar">
                <span>Welcome, <?php echo $_SESSION['username']; ?></span>
                <a href="logout.php" class="logout-btn">Logout</a>
            </div>
        <?php else: ?>
            <!-- Display existing login and signup buttons if the user is not logged in -->
            <a href="login.html" class="login-btn">Login</a>
            <a href="register.html" class="signup-btn">Signup</a>
        <?php endif; ?>
    </div>
</body>
</html>
