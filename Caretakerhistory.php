<?php
session_start();
include('db.php');
$cid = $_SESSION['id'];
//$ownerid = '1';
$query = "SELECT * FROM History WHERE cid = $cid";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> History </title>
        <link rel="stylesheet" type="text/css" href="css/history.css">
    </head>
    
    <body>
            <div class="topnav">
                <a href="login-ed_caretaker.php">Home</a> <!-- add js-->
                <a href="ProfileCT.php">Profile</a> <!-- add js-->
                <a href="Services.php">Services</a> <!-- add js-->
                <a class="active" href="Caretakerhistory.php">History</a> <!-- add js-->
                <form align="right" name="form1" method="post" action="log_out.php">
                    <label class="logoutLblPos">
                        <input name="submit2" type="submit" id="submit2" value="Log Out"> <!-- add js-->
                    </label>
                </form>
        </div>

        <header>History</header>
        <?php
		if(mysqli_num_rows($result)>0){
		?>
		<table align="center" border="0px" style="width:800px; line-height:40px;">
			<tr>
				<th colspan="8"><h2>HISTORY</h2></th>
			</tr>
                <th> Service ID: </th>
				<th> PET ID</th>			
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
                    $sid = $rows['sid'];
                    $pid = $rows['pid'];
                    $q = "SELECT pet_name From pets where pid = $pid";
                    
			?>
			<tr>
                <th><?php echo $rows['sid']; ?></th>
    			<th><?php echo $rows['pid']; ?></th>
			
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
        
    </body>
</html>     