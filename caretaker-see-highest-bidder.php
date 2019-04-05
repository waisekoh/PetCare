<? php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Highest Bidder</title>
            <link rel="stylesheet" type="text/css" href="/css/login-ed.css">
    </head>

    <div class="topnav">
        <a class="active" href="#home">Home</a> <!-- insert js -->
        <a href="#news">Profile</a> <!-- insert js -->
        <a href="#contact">Services</a> <!-- insert js -->
        <a href="#about">History</a> <!-- insert js -->
            <form align="right" name="form1" method="post" action="log_out.php">
                <label class="logoutLblPos"> 
                    <input name="submit2" type="submit" id="submit2" value="Log Out">
                </label>
        </form>
    </div>
<!--INPUT: profile pictures, names, and petID-->
    <body>
        <link rel="stylesheet" type="text/css" href="/css/caretaker-see-highest-bidder.css">
        <center class="highbid"><img src= "/images/happy-dog-owner.jpg" width="200"><br> <!-- insert sql -->
            <button class="button1"><p>Clickable Highest Bidder's Name</p></button><br> <!--insert sql-->
            <p>petID needs you!</p> <br> <!-- insert sql -->
            <button type="button">Accept</button> <!-- insert sql -->
            <button type="button">Decline</button></center> <!-- insert sql -->
    </body>
</html>