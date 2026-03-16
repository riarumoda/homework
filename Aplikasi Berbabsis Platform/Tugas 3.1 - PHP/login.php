<?php
session_start();
$message = "";

if (isset($_POST['login'])) {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if (isset($_SESSION['user_data']) && 
        $_SESSION['user_data']['username'] === $user && 
        $_SESSION['user_data']['password'] === $pass) {
        $message = "Welcome, " . htmlspecialchars($user);
    } else {
        $message = "Wrong username/password";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="actions">
                <button type="submit" name="login" class="btn btn-login">Login</button>
                <a href="regis.php" class="link">Register</a>
            </div>
        </form>
        <?php if($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>