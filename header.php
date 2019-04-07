<div class="topnav">
  <a href="home.php">Home</a> <!-- add js-->
  <a href="myprofile.php">Profile</a> <!-- add js-->
  <?php if($_SESSION['type'] == "Caretaker") { ?>
  <a href="Services.php">Services</a> <!-- add js-->
  <?php } else {?> <a href="Pets.php">Pets</a> <?php } ?>
  <a href="History.php">History</a> <!-- add js-->

   <a style="float: right"  href="log_out.php"> LogOut</a>

</div>  