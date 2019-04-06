<?php 
session_start();
include 'db.php';
$sid =$_POST['sid_in'];
$row = mysqli_fetch_assoc(mysqli_query($con,"SELECT Availability FROM SERVICE where sid = $sid"));
$ava = $row['Availability'];
if($ava == false){
    mysqli_query($con,"UPDATE Service Set Availability =true where sid = $sid");
    header('refresh:1; url=services.php');
}
else{
    mysqli_query($con,"UPDATE Service Set Availability =false where sid = $sid");
    header('refresh:1; url=services.php');
}
?>