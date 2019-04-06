<? php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Highest Bidder</title>  
    <link rel="stylesheet" type="text/css" href="/css/login-ed.css">
</head>

<div class="topnav">
                <a href="login-ed_owner.php">Home</a> <!-- insert js -->
                <a href="Profile.php">Profile</a> <!-- insert js -->
                <a href="Pets.php">Pets</a> <!-- insert js -->
                <a href="Ownerhistory.php">History</a> <!-- insert js -->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out">
                    </label>
                </form>
        </div> 
<body>
    <link rel="stylesheet" type="text/css" href="/css/listing.css">
    <div class="container">
        <center><h1>Listing of Caretaker</h1></center>
  <div class="row">
    <div class="col-sm-6" style="background-color:#DCC7AA;">
      <div class="combine"><div class="petprofile"><img src="/images/default.jpg" height= "145"></div>
        <div class="petinfo">
            <p>Name:</p> <!-- insert sql -->
            <p>Gender:</p> <!-- insert sql -->
            <p>Email Address:</p> <!-- insert sql -->
            <p>Country:</p> <!-- insert sql -->
            <p>Living Address:</p> <!-- insert sql -->
            <p>Birthday:</p> <!-- insert sql -->
            <p>Pet Types Accepted:</p> <!-- insert sql -->
            <p>Service Type:</p> <!-- insert sql -->
            <p>Period:</p> <!-- insert sql -->
            
            <p>Reviews</p> <!-- insert sql -->
             <div class="review" style="width:600px;height:100px;border:1px solid #000;text-align: center"></div><br>
            <div class="bidinfo" class="review" style="width:200px;height:120px;border:1px solid #000;text-align:left"><div class="form-group"><label for="inputMinBid">Mininum Bid:</label><input type="text" class="form-control" id="inputMinBid"></div>
                <div class="form-group"><label for="inputPetID">PetID:</label><input type="text" class="form-control" id="inputPetID"></div><br><button>Bid</button><p></div><br>
            </div>
          </div>
    </div>
  </div>
</div>
</body>
</html>