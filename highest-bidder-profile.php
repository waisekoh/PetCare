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
                <a href="#contact">Services</a> <!-- insert js -->
                <a href="#about">History</a> <!-- insert js -->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out">
                    </label>
                </form>
    </div> 
<!-- input display name, gender, email, country, address, birthday -->
<body>
 <link rel="stylesheet" type="text/css" href="/css/highest-bidder-profile.css">
<div class="row">
    <center><h1>Highest Bidder's Profile</h1></center>
    <center class="bidder"><div class="profile"><img src="/images/default.jpg"></div> <!-- insert sql -->
    <div class="info">
        <p>Display Name:</p> <!-- insert sql -->
        <p>Gender:</p> <!-- insert sql -->
        <p>Email Address:</p> <!-- insert sql -->
        <p>Country:</p> <!-- insert sql -->
        <p>Living Address:</p> <!-- insert sql -->
        <p>Birthday:</p></div> <!-- insert sql -->
    </center>
    <!--split screen into half -->
    <br />
</div>
<br>
<div class="row">
    <center><h1>My Pets</h1></center><br />
    <!-- split -->
      <div class="container">
  <div class="newrow">
    <div class="col-sm-6" style="background-color:#DCC7AA;">
        <div class="combine"><div class="petprofile"><img src="/images/default.jpg" height= "145"></div>
        <div class="petinfo">
            <p>petID:</p> <!-- insert sql -->
            <p>Petname:</p> <!-- insert sql -->
            <p>Breed Type:</p> <!-- insert sql -->
            <p>Age:</p> <!-- insert sql -->
            <p>Special Requiremments:</p> <!-- insert sql -->
            </div></div>
    </div>
    <div class="col-sm-6" style="background-color:#DCC7AA;">
      <div class="combine"><div class="petprofile"><img src="/images/default.jpg" height= "145"></div>
        <div class="petinfo">
            <p>petID:</p> <!-- insert sql -->
            <p>Petname:</p> <!-- insert sql -->
            <p>Breed Type:</p> <!-- insert sql -->
            <p>Age:</p> <!-- insert sql -->
            <p>Special Requiremments:</p> <!-- insert sql -->
            </div></div>
    </div>
  </div>
</div>  

    <!--may auto-add when got multiple pets --> <!-- insert sql to auto generate how many pets this bidder has-->
</div>
</body>
</html>