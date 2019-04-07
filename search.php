<?php 
	session_start();
	include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Search Results </title>
        <link rel="stylesheet" type="text/css" href="css/pets.css">
    </head>
    
    <body>
	<center>
	<?php
		if(isset($_POST['submitsearch'])){
			$search = mysqli_real_escape_string($con, $_POST['search']);
			$sql = "SELECT * FROM service WHERE stype LIKE '%$search%' 
					OR ptype LIKE '%$search%'
					OR fromdate LIKE '%$search%'
					OR todate LIKE '%$search%'";
			$result = mysqli_query($con, $sql);
			$queryResult = mysqli_num_rows($result);
			
			if(mysqli_num_rows($result)>0){?>
			
				<h2><?php 
					echo " ".$queryResult." Result(s) found!";
					while($row = mysqli_fetch_assoc($result)){ ?> </h2>
						
						
					<form class="owner-form" action="serviceinfo.php" method ="POST">
						<button name="sid_in" Value = <?php echo $row['sid']; ?> style="border: none; background: none;">
						<h2><?php echo $row['stype']; ?> <a> Service </a> </h2>
					</form>
						</h2>
						<p>
							<a> Animal type: </a> <?php echo $row['ptype'];?>
						</p>
						<p>
							<a> Current minbid: </a> <?php echo $row['minbid']; ?>
						</p>			
						<p>
							<a> From: </a> <?php echo $row['fromdate']; ?>
						</p>
						<p>
							<a> To: </a> <?php echo $row['todate']; ?>
						</p>
<?php			
					}
			}
			else{
				echo "There are no results matching your search!";
			}
		}
	?>
	</center>
	</body>


</html>