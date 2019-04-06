<?php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/updatepassword.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="login-ed_owner.php">Home</a> <!-- add js-->
                <a href="Profile.php">Profile</a> <!-- add js-->
                <a href="Pets.php">Pets</a> <!-- add js-->
                <a href="Ownerhistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Update Password</header>
        
        <h1>
            <div class="container">
                <form role="form">
                    <!-- Text field -->
                    <div class =" form-group ">
                        <label for=" inputOPassword ">Old Password</ label > <!-- input php-->
                        <input type ="password" class =" form-control " id=" inputOPassword ">
                    </div >
                    <div class =" form-group ">
                        <label for=" inputNPassword ">New Password</ label > <!-- input php-->
                        <input type ="password" class =" form-control " id=" inputNPassword ">
                    </div >
                    <div class =" form-group ">
                        <label for=" reenterNPassword ">Re-enter New Password</ label > <!-- input php-->
                        <input type ="password" class =" form-control " id=" reenterNPassword ">
                    </div >
                </form>
            </div>
        </h1>
        
        <h2>
            <div class="clearfix">
                <button type="next" class="Signupbtn">Update</button> <!-- add js-->
            </div>
        </h2>
    </body>
</html>
