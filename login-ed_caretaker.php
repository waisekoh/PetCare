<? php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to PAWsome Boarding</title>  
    <link rel="stylesheet" type="text/css" href="/css/login-ed.css">
</head>

<div class="topnav">
                <a class="active" href="login-ed_caretaker.php">Home</a> <!-- insert js -->
                <a href="ProfileCT.php">Profile</a> <!-- insert js -->
                <a href="Services.php">Services</a> <!-- insert js -->
                <a href="Caretakerhistory.php">History</a> <!-- insert js -->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out">
                    </label>
                </form>
        </div>    
    
<!--INPUT: profile pictures, names, event titles, descrptions and status to be drawn from SQL-->  
<div class="split left"> 
<center><div class ="txt"><p>Popular Caretakers</p></div></center>
  <div class="centered">
    <div>
        <button class="invisible"><img src="/images/img_avatar1.jpg" alt="Avatar woman"></button>
    <h2>Jane Flex</h2> <!-- insert sql -->
    <p>vbshuvbduvuvebvbeivbfivbciefbvuifevb</p> <!-- insert sql -->
    </div>
    
    <div>
        <button class="invisible"><img src="/images/img_avatar2.jpg" alt="Avatar woman"></button>
    <h2>James hue</h2> <!-- insert sql -->
    <p>asdfghjklertyuioxcvbn</p> <!-- insert sql -->
      </div>          
        
      <div><button class="invisible"><img src="/images/img_avatar3.jpg" alt="Avatar woman"></button>
    <h2>Jane plina</h2> <!-- insert sql -->
    <p>Some njwifbiwbfrif</p> <!-- insert sql -->
      </div>
    <button type="button">View More</button> <!-- insert js -->
  </div>
</div>

<div class="split right">
<center><div class ="txt"><p>Published Services</p></div></center>
  <div class="newcenter">
      <button class="invisible"><h2>Event 1</h2></button> <!-- insert js -->
    <p>descriton</p> <!-- insert sql -->
      <button class="invisible"><h2>Event 2</h2></button> <!-- insert js -->
    <p>description</p> <!-- insert sql -->
      <button class="invisible"><h2>Event 3</h2></button> <!-- insert js -->
    <p>description</p> <!-- insert sql -->
  </div>
</div>
</html>