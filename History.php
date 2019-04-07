<?php
session_start();
include('db.php');
include('header.php');
$cid = $_SESSION['id'];
//$ownerid = '1';
$type = $_SESSION['type'];
if($type=='Caretaker'){
	$query = "SELECT * FROM History WHERE cid = $cid";
}
else{
	$query = "SELECT * FROM service where oid = $cid";
}
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> History </title>
        <link rel="stylesheet" type="text/css" href="css/history.css">
    </head>
    
    <body>
	<center>

        <?php
		if($type =='Caretaker'){
			if(mysqli_num_rows($result)>0){	
		?>
			<table align="center" border="1px" style="width:800px; line-height:40px;">
				<tr>
					<th colspan="8"><h2>HISTORY</h2></th>
				</tr>
                	<th> Service ID: </th>
					<th> PET ID</th>			
				<?php while($rows = mysqli_fetch_assoc($result)) {
                		$sid = $rows['sid'];
                    	$pid = $rows['pid'];
                    	$q = "SELECT pet_name From pets where pid = $pid";?>
				<tr><th><?php echo $rows['sid']; ?></th> 
				<th><?php echo $rows['pid']; ?></th></tr>
				<?php }?>
			<table>
				<?php } else{ 
				?><h2>
				<?php
				echo("You have no History! Start servicing now!"); }
				?>
				</h2>
				<?php
				
				?>
		
		<?php
			}
		else{ ?>
			<table align="center" border="1px" style="width:800px; line-height:40px;">
			<tr>
				<th colspan="8"><h2>HISTORY</h2></th>
			</tr>
				<th> Service Name </th>
				<th> Your winning bid</th>			
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
					$sname = $rows['stype'];
					$winbid = $rows['minbid'];
				
			?>
			<tr>
				<th><?php echo $sname; ?></th>
				<th><?php echo $winbid; ?></th>
		
			</tr>
			<?php
				}
				?>
		<table>
		<?php
		};
	?>
    </center>    
    </body>
</html> 