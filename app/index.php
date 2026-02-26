<?php
// Login page - UI only (no authentication yet)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Monolith PHP</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <div class="login-container">
        <h2>Welcome to Monolith App</h2>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Enter Username" required>
            <input type="password" name="password" placeholder="Enter Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>