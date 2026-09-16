<?php
session_start();

// NOTE: This is a demo login page. It does NOT include a database-backed user table.
// Replace the credentials below with your own logic.

$validUsername = 'admin';
$validPassword = 'admin123';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = (string)($_POST['password'] ?? '');

    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['logged_in'] = true;
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    }

    $error = 'Invalid username or password.';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .form-wrap{max-width:460px;margin:60px auto;}
        .error{color:#d90000;font-weight:700;text-align:center;margin:10px 0 0;}
        .success{color:#10a80b;font-weight:700;text-align:center;margin:10px 0 0;}
        .input-group label{color:#000;}
        .login-actions{display:flex;gap:16px;justify-content:center;margin-top:20px;}
    </style>
</head>
<body>
    <div class="container form-wrap">
        <h2>Admin Login</h2>

        <?php if ($error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>

        <form action="login.php" method="post">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required />
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required />
            </div>

            <div class="login-actions">
                <button class="button" type="submit">Login</button>
                <button class="button" type="reset">Reset</button>
            </div>
        </form>

        <p style="margin-top:15px; font-size:12px; color:#000000; opacity:0.8;">
            Demo credentials: <b>admin</b> / <b>admin123</b>
        </p>
    </div>
</body>
</html>

