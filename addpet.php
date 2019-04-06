<? php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/add&editpet.css">
    </head>
    
    <body>
            <div class="topnav">
                <a class="active" href=login-ed_owner.php>Home</a> <!-- add js-->
                <a href=Profile.php>Profile</a> <!-- add js-->
                <a href=Pets.php>Pets</a> <!-- add js-->
                <a href=Ownerhistory.php>History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Add Pet</header>
        
        
            <div class="container">
			<h1>
                <form role="form" action="addpet1.php" method="POST">
                    <!-- Text field -->
                    <div class =" form-group ">
                        <label for="inputPetName">Pet Name:</ label > <!-- add php-->
                        <input type ="text" class ="form-control" id="inputPetName" name="petname">
                    </div >
                    <div class ="form-group">
                        <label for=" inputBreedType ">Species of Pet:</ label > <!-- add php-->
                        <input type ="text" class ="form-control" id="inputBreedType" name="species">
                    </div >
                    <!--
					<div class =" form-group ">
                        <label for=" inputAge ">Age</ label > 
                        <input type ="text" class =" form-control " id=" inputAge ">
                    </div >
                    <div class =" form-group ">
                        <label for=" inputspecialReq ">Special Requirements</ label >
                        <input type ="text" class =" form-control " id=" inputspecialReq ">
                    </div > -->
                
            
			</h1>
        
        <h2>
            
                <button type="next" class="Addpetbtn">Add Pet</button> <!-- add js-->
        </h2>   
			</div>
			</form>
    </body>
</html>