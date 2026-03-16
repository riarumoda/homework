<?php
session_start();
$message = "";

if (isset($_POST['send'])) {
    $_SESSION['user_data'] = [
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ];
    $message = "User is added";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
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
                <button type="submit" name="send" class="btn btn-register">Send</button>
                <a href="login.php" class="link">Back to Login</a>
            </div>
        </form>
        <?php if($message): ?>
            <div class="message" style="color: #28a745;"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>
</body>
</html>