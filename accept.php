<?php 
session_start();
include 'db.php';
$sid =$_POST['sid_in'];
echo("accepting $sid");
$u = "SELECT cid, pid, sid, Availability FROM SERVICE where sid = $sid";
$row = mysqli_fetch_assoc(mysqli_query($con,$u));
$cid = $row['cid'];
$pid = $row['pid'];
$ava = $row['Availability'];
if($ava == false){
    echo"oof";
}
else{
    $sql = "INSERT INTO history (cid,pid,sid) VALUES ('$cid', '$pid','$sid')";
    $hihi = mysqli_query($con, $sql);
    $q= "UPDATE Service Set Availability = false where sid = $sid";
    $hi = mysqli_query($con,$q);
    header('refresh:1; url=login-ed_caretaker.php');
}
?>