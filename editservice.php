<? php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Services </title>
        <link rel="stylesheet" type="text/css" href="css/add&editservice.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="login-ed_caretaker.php">Home</a> <!-- add js-->
                <a href="ProfileCT.php">Profile</a> <!-- add js-->
                <a href="Services.php">Services</a> <!-- add js-->
                <a href="Caretakerhistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Edit Service</header>
        
        <h1>
            <div class="container">
                <form role="form">
                    <!-- Text field -->
                    <div class =" form-group ">
                        <label for=" inputPeriod ">Period</ label > <!--add php-->
                        <input type ="text" class =" form-control " id=" inputPeriod " placeholder="DDMM-DDMM">
                    </div >
                    <div class =" form-group ">
                        <label for=" inputPetAccepted ">Pet Types Accepted</ label > <!--add php-->
                        <input type ="text" class =" form-control " id=" inputPetAccepted ">
                    </div >
                </form>
            </div>
        </h1>
        
        <h2>
            <div class="clearfix">
                <button type="next" class="Savebtn">Save</button> <!-- add js-->
            </div>
        </h2>
    </body>
</html>    