<? php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> History </title>
        <link rel="stylesheet" type="text/css" href="css/history.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href=login-ed_owner.php>Home</a> <!-- add js-->
                <a href=Profile.php>Profile</a> <!-- add js-->
                <a href=Pets.php>Pets</a> <!-- add js-->
                <a class="active" href=Ownerhistory.php>History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>History</header>
        
        <div class="container row">
            <h1> Service 1 </h1>
            <h2> Service Type: <!-- input php--> </h2>
            <h2> Period: <!-- input php--> </h2>
            <h2> Pet Type Accepted: <!-- input php--> </h2>
            <div class="clearfix">
                <button type="next" class="Leavereviewbtn">Leave Review</button> <!-- add js-->
            </div>
        </div>
        
        <p> </p>
        <div class="container row">
            <h1> Service 2 </h1>
            <h2> Service Type: <!-- input php--> </h2>
            <h2> Period: <!-- input php--> </h2>
            <h2> Pet Type Accepted: <!-- input php--> </h2>
        </div>
        
    </body>
</html>     