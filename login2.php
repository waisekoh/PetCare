<?php
	session_start();
	include 'db.php';
	
	$email =$_POST['inputEmail'];
	$pwd =$_POST['inputPassword'];
	$sql = " SELECT * From Users WHERE email = '$email' AND password = '$pwd'";
	$results = mysqli_query($con,$sql);
	echo('hi');
	if(!$row=mysqli_fetch_assoc($results)){
		echo('hi');
		$_SESSION["temp"]="error1";
		header("refresh:1; url=login.php");
		exit;
	}
	else{
		$_SESSION['id']=$row['UserID'];
		$_SESSION['email']=$row['email'];
		$hi = $_SESSION['email'];
		$check= "SELECT * FROM OWNER WHERE OID = '$hi'";
		$checkRes = mysqli_query($con, $check);
		if(!mysqli_num_rows($checkRes)>0){
			$_SESSION['type']='Caretaker';
			echo 'CareTaker Succesful Login';
			header("refresh:1; url=login-ed_caretaker.php");
		}
		else{
			$_SESSION['type']='Owner';
			echo 'Owner Succesful Login';
			header("refresh:10; url=login-ed_owner.php");
		}

	}
	
?>

	