<?php
session_start();
include('db.php');
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
        <div class="topnav">
                <a href="login-ed_caretaker.php">Home</a> <!-- add js-->
                <a href="ProfileCT.php">Profile</a> <!-- add js-->
                <?php if($_SESSION['type'] == "Caretaker") { ?>
                <a class="active" href="Services.php">Services</a> <!-- add js-->
                <?php } else {?> <a class="active" href="Petinfo.php">Pets</a> <?php } ?>
                <a href="Caretakerhistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>
        <center>
            <header><?php echo $dname; ?></header>
        
            <h2> Gender: <?php echo $gender; ?> </h2>
            <h2> Email: <?php echo $email; ?> </h2>
            <h2> Country: <?php echo $country; ?></h2>
            <h2> Age: <?php echo $age; ?> </h2>
        
        </center>
    </body>
</html>    