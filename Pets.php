<?php
session_start();
include('db.php');
include('header.php');
$ownerid = $_SESSION['id'];
#$ownerid = '1';
$query = "SELECT * FROM pets WHERE oid = $ownerid";
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <title> Pets </title>
        <link rel="stylesheet" type="text/css" href="css/pets.css">
    </head>
    
    <body>


        <header>Pets</header>
        <?php
		if(mysqli_num_rows($result)>0){
		?>
		<table align="center" border="1px" style="width:600px; line-height:40px;">
			<tr>
				<th colspan="4"><h2>Pets</h2></th>
			</tr>
			
				<th> Pet ID: </th>
				<th> Pet Name: </th>
				<th> Pet Type: </th>
			
			<?php
				while($rows = mysqli_fetch_assoc($result))
				{
			?>
			<tr>
			
				<th>
					<a href=petinfo.php> <?php echo $rows['pid']; ?></a>		
				</th>
				<th><?php echo $rows['pet_name']; ?></th>
				<th><?php echo $rows['pet_type']; ?></th>
			
			</tr>
			<?php
				}
				?>
			</table>
            <!-- 
			<div class="clearfix">
                <button type="next" class="Seemorebtn">See More</button></div>
			-->
		<?php
		}
		else{
			echo("You do not have any Pets Registered.");	
			}
		?>

        <p> </p>
            
        <h1>
            <div align="center" class="clearfix">
                <a href=addpet.php><button type="next" class="Addpetbtn">Add Pet</button></a>
			</div> <!-- add js-->
        </h1>
        
    </body>
</html>
        