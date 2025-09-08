<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 text-center">
    <h1 class="display-4">Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <p class="lead">You have successfully logged in.</p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
