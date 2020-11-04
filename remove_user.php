<?php require ('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove_users</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $del_user = $_POST['username'];
        $sql = "DELETE FROM users WHERE username='$del_user'";
        if(mysqli_query($con,$sql)){
            echo "record deleted successfully.";
            header("Location : logout.php");
        }
        else{
            echo "An error occured : ";
        }
    }
    else{
    ?>
    <h2>Enter the user you want to remove.</h2>
    <form action="remove_user.php" method="POST">
        <input type="text" name="username" placeholder="enter username">
        <input type="submit" name="submit">
    </form>
    <?php } ?>
</body>
</html>