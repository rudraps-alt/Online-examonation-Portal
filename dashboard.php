<?php
include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>
    <div>
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now on user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
