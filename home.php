
<?php
session_start();
include('db.php');
include('header.php');
$cid = $_SESSION['id'];
$query = "SELECT * FROM Service WHERE cid = $cid and availability = true";
$result = mysqli_query($con, $query);
$q2 = "SELECT * FROM SERVICE";
$reco = mysqli_query($con,$q2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to PAWsome Boarding</title>  
    <link rel="stylesheet" type="text/css" href="css/login-ed.css">
</head>
  
<div class="split left"> 
<center><div class ="txt"><p><h3> Listing</h3></p></div></center>
<?php if(mysqli_num_rows($reco) == 0){ ?> <a> No Current Listing </a>
  <div class="centered">
  <?php } else{ 
    while($recorow = mysqli_fetch_assoc($reco))
    {
      ?>
    <div class="newcenter">
      <h2><?php $rcid = $recorow['cid']; ?> <form class="owner-form" action="profileothers.php" method ="POST">
              <h2> <button  name="oid_in" Value = <?php echo $rcid; ?> style="border: none; background: none;"> <?php
              $q= "SELECT display_name FROM `users` WHERE USERID = $rcid";
              $q3 = "SELECT * FROM service WHERE cid= $rcid";
              $sql = mysqli_query($con,$q);
              $sqll = mysqli_query($con,$q3);
              $sid = mysqli_fetch_assoc($sqll)['sid'];
              $stype = mysqli_fetch_assoc($sqll)['stype'];
              $animal_type = mysqli_fetch_assoc($sqll)['ptype'];

              echo(mysqli_fetch_assoc($sql)['display_name']);?></h2>
              </form>
             <form class="owner-form" action="serviceview.php" method ="POST"> <button  name="sid_in" Value = <?php echo $sid; ?> style="border: none; background: none;">
             <h2><a> Service name: </a><?php echo($stype) ?> </h2>
             </form>
             </h2>

             <p>
             <a> Animal type: </a> <?php echo($animal_type);?>
             </p>
             <p>
             <a> Current minbid: </a> <?php echo(mysqli_fetch_assoc($sqll)['minbid']); ?>
              </p>
            </h2>
    </div>
    <?php
				} }
				?>   
  </div>
</div>

<div class="split right">
<center><div class ="txt"><p>Published Services</p></div></center>
  <?php if(mysqli_num_rows($result) == 0){ ?> <a> No Current services </a>
  <?php } else{ 
    while($rows = mysqli_fetch_assoc($result))
    {
      ?>
    <div class="newcenter">
      <h2><?php echo $rows['sid'] ?></h2>
    <p>
    <?php if($rows['pid'] == null){ ?> <a>No bidder </a>
      <?php }
        else{
        $pid = $rows['pid'];
        $q= "SELECT pet_name FROM `pets` WHERE pid = $pid";
        $sql = mysqli_query($con,$q);
        echo(mysqli_fetch_assoc($sql)['pet_name']); } ?></p>

    </div>
    <?php
				} }
				?>
  </div>
</html>