<?php
session_start();
include('db.php');
include('header.php');
$cid = $_SESSION['id'];
$query = "SELECT * FROM Users WHERE UserID = $cid";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_assoc($result)
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    
    <body>
        <center>
            <header><?php echo $rows['display_name']; ?></header>
        
            <h2> Gender: <?php echo $rows['gENDer']; ?> </h2>
            <h2> Email: <?php echo $rows['email']; ?> </h2>
            <h2> Country: <?php echo $rows['country']; ?></h2>
            <h2> Age: <?php echo $rows['age']; ?> </h2>
        
            <div class="clearfix">
                <button type="next" class="Updatebtn">Update Profile</button> <!-- add js-->
                <button type="next" class="Updatebtn">Update Password</button> <!-- add js-->
            </div>
        </center>
    </body>
</html>    