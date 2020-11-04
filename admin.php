<?php
$con = mysqli_connect("localhost","root","ATG@2516","LoginSystem");
if (mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_error();
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $sql = "SELECT username, password FROM users WHERE id=1";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $db_username = $row['username'];
        $db_password = $row['password'];
        if(($_POST['username']==$db_username)and($_POST['password']==$db_password)){ ?>
            <h1>Welcome to the Admin page.</h1>
            <h2>Choose an action.</h2>
            <ul>
            <li><a href="remove_user.php">Delete a user.</a></li>
            <li><a href="view_registered.php">View all the registred users.</a></li>
            </ul>
            <a href="logout.php">Logout</a>
        <?php
        }
        else{
            echo "Incorrect Username or Password.";
        }
    }
    else{
    ?>
    <form action="admin.php" method="POST">
        <input type="text" name="username" placeholder="Enter username" required>
        <input type="password" name="password" placeholder="Enter password" required>
        <input type="submit" name="submit">
    </form>
    <?php } ?>
</body>
</html>