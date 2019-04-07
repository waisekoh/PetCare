<?php
session_start();
include('db.php');
include('header.php');
$oid = $_POST['oid_in'];
$query = "SELECT * FROM Users WHERE UserID = $oid";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_assoc($result);
$dname = $rows['display_name'];
$gender = $rows['gENDer'];
$email = $rows['email'];
$age = $rows['age'];
$country = $rows['country']
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    
    <body>
        <center>
            <header><?php echo $dname; ?></header>
        
            <h2> Gender: <?php echo $gender; ?> </h2>
            <h2> Email: <?php echo $email; ?> </h2>
            <h2> Country: <?php echo $country; ?></h2>
            <h2> Age: <?php echo $age; ?> </h2>
                    
        </center>

        <div>
        <center>
        </center>
        </div>
    </body>
</html>    