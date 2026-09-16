<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}

$user = $_SESSION['user'] ?? 'user';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css" />
    <style>
        .dash-wrap{max-width:560px;margin:60px auto;}
        .card{background:rgba(255,255,255,0.65);padding:24px;border-radius:14px;}
        a.btnlink{display:inline-block;margin-top:18px;text-decoration:none;}
    </style>
</head>
<body>
    <div class="container dash-wrap">
        <div class="card">
            <h2>Dashboard</h2>
            <p style="color:#000000; opacity:0.9; font-size:14px;">
                Logged in as <b><?php echo htmlspecialchars($user); ?></b>
            </p>

            <div style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
                <a class="button" href="login.php" style="text-align:center; text-decoration:none; display:inline-block;">Go to Login</a>
                <a class="button" href="logout.php" style="text-align:center; text-decoration:none; display:inline-block;">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>

