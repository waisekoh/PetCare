<? php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to PAWsome Boarding</title>  
    <link rel="stylesheet" type="text/css" href="/css/login-ed.css">
</head>

<div class="topnav">
                <a class="active" href="#home">Home</a> <!-- insert js -->
                <a href="#news">Profile</a> <!-- insert js -->
                <a href="#contact">Pets</a> <!-- insert js -->
                <a href="#about">History</a> <!-- insert js -->
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
      <div><button class="invisible"><img src="/images/img_avatar1.jpg" alt="Avatar woman"></button>
    <h2>Jane Flex</h2> <!-- insert sql -->
    <p>vbshuvbduvuvebvbeivbfivbciefbvuifevb</p> <!-- insert sql -->
    </div>
    
      <div><button class="invisible"><img src="/images/img_avatar2.jpg" alt="Avatar woman"></button>
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
<center><div class ="txt"><p>Boarding Requests</p></div></center>
  <div class="newcenter">
    <button class="invisible"><h2>event 1</h2></button> <!-- insert sql + js-->
    <p>descriton</p> <!-- insert sql -->
      <div class="status" style="width:100px;height:20px;border:1px solid #000;text-align: center">status</div>
      <button class="invisible"><h2>Event 2</h2></button> <!-- insert sql + js-->
    <p>description</p> <!-- insert sql -->
      <div class="status" style="width:100px;height:20px;border:1px solid #000;text-align: center">status</div><br>
      <button class="invisible"><h2>Event 3</h2></button> <!-- insert sql + js-->
    <p>description</p> <!-- insert sql -->
      <div class="status" style="width:100px;height:20px;border:1px solid #000;text-align: center">status</div>
  </div>
</div>
</html>
