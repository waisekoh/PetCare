<?php
session_start();
include('db.php');
$cid = $_SESSION['id'];
//$ownerid = '1';
$query = "SELECT * FROM Service WHERE cid = $cid";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Services </title>
        <link rel="stylesheet" type="text/css" href="css/services.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="login-ed_caretaker.php">Home</a> <!-- add js-->
                <a href="profileCT.php">Profile</a> <!-- add js-->
                <a href="services.php">Services</a> <!-- add js-->
                <a href="Caretakerhistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>Services</header>
        <p> </p>
        <?php
		if(mysqli_num_rows($result)>0){
		?>
		<table align="center" border="1px" style="width:800px; line-height:40px;">
			<tr>
				<th colspan="8"><h2>Service</h2></th>
			</tr>
                <th> Service ID: </th>
				<th> Service Type: </th>
				<th> Service Date: </th>
				<th> Highest bidder: </th>
                <th> Current bid: </th>
                <th> Action: </th>
                <th> Published: </th>
                <th> Publish: </th>
			
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
			?>
			<tr>
                <th><?php echo $rows['sid']; ?></th>
    			<th><?php echo $rows['stype']; ?></th>
				<th><?php echo $rows['fromdate']; ?></th>
				<?php if($rows['pid'] == null){ 
                ?>
                <th><a>No bidder </a></th>
                <?php
                }
                else{ ?>
				    <th><form class="pet-form" action="petinfo.php" method ="POST">
                    <button  name="pid_in" Value = <?php echo $rows['pid']; ?> style="border: none; background: none;"> <?php 
                    $pid = $rows['pid'];
                    $q= "SELECT pet_name FROM `pets` WHERE pid = $pid";
                    $sql = mysqli_query($con,$q);
                    echo(mysqli_fetch_assoc($sql)['pet_name']); ?> </button></a>
                    </form> </th>
                <?php } ?>
                <th><?php echo $rows['minbid']; ?></th>
                <th>
                <form class="accept-form" action="accept.php" method ="POST">
                <button type="next" class="addsvcbtn" name="sid_in" Value = <?php echo $rows['sid']; ?> >Accept</button></a>
                </form> </th>
                <th><?php echo $rows['availability']; ?></th>
                <th>
                <form class="accept-form" action="publish.php" method ="POST">
                <button type="next" class="addsvcbtn" name="sid_in" Value = <?php echo $rows['sid']; ?> >Publish</button></a>
                </form> </th>
			
			</tr>
			<?php
				}
				?>
			</table>
		</div>
		<?php
		}
		else{
			echo("You do not have any SERVICES Registered.");	
			}
		?>

        
        <h1>
            <div class="clearfix">
            <a href="addservice.php"> <button type="next" class="addsvcbtn">Add service</button></a> 
        </h1>
        
    </body>
</html>