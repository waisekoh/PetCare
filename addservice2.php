<?php
	session_start();
    include 'db.php';
    
    $cid = $_SESSION['id'];
    $pettype =$_POST["ptype_in"];
    $startdate =$_POST['startdate_in'];
    $enddate =$_POST["enddate_in"];
	$minbid =$_POST['Min_bid_in'];
    $servicetype= $_POST['stype_in'];
    $sql = "INSERT INTO service (cid, ptype,stype,fromdate,todate,minbid)  VALUES ('$cid','$pettype', '$servicetype', '$startdate', '$enddate', '$minbid') ";
    if(!mysqli_query($con, $sql))
		{
			echo 'Not Inserted';
			}
	
		else
		{	
			echo 'New Service Created';
        }
?>
