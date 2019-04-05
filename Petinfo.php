<? php
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/petinfo.css">
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

        <header>Pets</header>
        
        <div class="container row">
            <h2> Pet ID: <!-- input php--> </h2>
            <h2> Pet Name: <!-- input php--> </h2>
            <h2> Breed Type: <!-- input php--> </h2>
            <h2> Age: <!-- input php--> </h2>
            <h2> Special Requirements: <!-- input php--> </h2>
            <div class="clearfix">
                <button type="next" class="Editbtn">Edit</button></div> <!-- add js-->
        </div>
        
        <p> </p>
        
        <div class="container row">
            <h2> Reviews: <!-- input php--> </h2>
        </div>
        
    </body>
</html>