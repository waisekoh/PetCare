<?
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Profile </title>
        <link rel="stylesheet" type="text/css" href="css/updateprofile.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="login-ed_caretaker.php">Home</a> <!-- add js-->
                <a href="ProfileCT.php">Profile</a> <!-- add js-->
                <a href="Services.php">Services</a> <!-- add js-->
                <a href="Caretakerhistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"><!-- add js-->
                    </label>
                </form>
        </div>

        <header>Update Profile</header>
        
        <h1>
            <div class="container">
                <form role="form">
                    <!-- Text field -->
                    <div class =" form-group ">
                        <label for=" inputEmail ">Email</ label > <!-- input php-->
                        <input type ="email" class =" form-control " id=" inputEmail ">
                    </div >
                    
                    <div class="form-group">
                        <label for="inputPhone">Phone Number</label> <!-- input php-->
                        <input type="text" class="form-control" id="inputPhone">
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAddress">Address</label> <!-- input php-->
                        <input type="text" class="form-control" id="inputAddress">
                    </div>
                    <div class="form-group">
                        <label for="inputCountry">Country</label> <!-- input php-->
                        <input type="text" class="form-control" id="inputCountry">
                    </div>
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