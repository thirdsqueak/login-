<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["user_name"]; ?>!</h2>
    <p>You are now logged in.</p>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>
</body>
</html>
