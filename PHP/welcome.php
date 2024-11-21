<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: register.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="../Pages/index.html">MyPCStore</a>
            </div>
            <ul class="nav-links">
                <li><a href="../Pages/index.html">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Welcome, <?php echo $_SESSION['']; ?>!</h1>
    </main>
</body>
</html>
