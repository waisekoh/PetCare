<? php
?> 
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/profile.css">
    </head>
    
    <body>
            <div class="topnav">
                <a class="active" href="#home">Home</a> <!-- add js-->
                <a href="#news">Profile</a> <!-- add js-->
                <a href="#contact">Pets</a> <!-- add js-->
                <a href="#about">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Profile</header>
        
        <h2> First name: <!-- input first name php--> </h2>
        <h2> Last Name: <!-- input last name php--> </h2>
        <h2> Display Name: <!-- input display name php--> </h2>
        <h2> Gender: <!-- input gender php--> </h2>
        <h2> Phone Number: <!-- input phone number php--> </h2>
        <h2> Email: <!-- input email php--> </h2>
        <h2> Country: <!-- input country php--> </h2>
        <h2> Address: <!-- input address php--> </h2>
        <h2> Birthday: <!-- input birthday php--> </h2>
        
        <div class="clearfix">
                <button type="next" class="Updatebtn">Update Profile</button> <!-- add js-->
                <button type="next" class="Updatebtn">Update Password</button> <!-- add js-->
        </div>
    </body>
</html>    