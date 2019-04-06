<? php
session_start()
echo($_SESSION['id'])

?>  
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Services </title>
        <link rel="stylesheet" type="text/css" href="css/add&editservice.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="home_caretaker.php">Home</a> <!-- add js-->
                <a href="profileCT.php">Profile</a> <!-- add js-->
                <a href="services.php">Services</a> <!-- add js-->
                <a href="Caretakerhiistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Add Service</header>
        
        <h1>
            <div class="container">
                <form class="Addsvcbtn" action="addservice2.php" method ="POST">
                    <!-- Text field -->
                    <div class =" form-group ">
                        <label for=" stype_in ">Service Type</ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="stype_in">
                    </div >
                    <div class =" form-group ">
                        <label for=" startdate_in ">Start Date</ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="startdate_in" placeholder="DDMM-DDMM">
                    </div >
                    <div class =" form-group ">
                        <label for="enddate_in ">End Date</ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="enddate_in" placeholder="DDMM-DDMM">
                    </div >
                    <div class =" form-group ">
                        <label for="Min_bid_in">Minimum bid</ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="Min_bid_in">
                    <div class =" form-group ">
                        <label for=" ptype_in ">Pet Types Accepted</ label > <!-- add php-->
                        <input type ="text" class =" form-control " name="ptype_in">
                    </div >
                    <div class="clearfix">

                    <button type="next" class="Addsvcbtn">Add Service</button> <!-- add js-->
                    </div>
                </form>
            </div>
        </h1>
        
        <h2>
           
        </h2>
    </body>
</html>    