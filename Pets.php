<? php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/pets.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="login-ed_owner.php">Home</a> <!-- add js-->
                <a href=Profile.php>Profile</a> <!-- add js-->
                <a class="active" href=Pets.php>Pets</a> <!-- add js-->
                <a href=Ownerhistory.php>History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Pets</header>
        
        <div class="container row">
            <h2> PetID: </h2> <!-- input php-->
            <h2> Pet Name: </h2><!-- input php-->
            <div class="clearfix">
                <button type="next" class="Seemorebtn">See More</button></div> <!-- add js-->
        </div>
        
        <p> </p>
        
        <div class="container row">
            <h2> PetID: </h2> <!-- input php-->
            <h2> Pet Name: </h2> <!-- input php-->
            <div class="clearfix">
                <button type="next" class="Seemorebtn">See More</button></div> <!-- add js-->
        </div>
            
        <h1>
            <div class="clearfix">
                <button type="next" class="Addpetbtn">Add Pet</button></div> <!-- add js-->
        </h1>
        
    </body>
</html>
        
        