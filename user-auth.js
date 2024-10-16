document.addEventListener('DOMContentLoaded', () => {
    const username = "<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>";
    if (username) {
        document.getElementById('user-info').style.display = 'block';
        document.getElementById('logout-link').style.display = 'block';
        document.getElementById('user-info').textContent = username;
        document.getElementById('signup-link').style.display = 'none';
        document.getElementById('login-link').style.display = 'none';
    }
});
