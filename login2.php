<?php
	session_start();
	include 'db.php';
	
	$email =$_POST['inputEmail'];
	$pwd =$_POST['inputPassword'];
	$type= $_POST['inputType'];
	
	#$page ='';
	$validUser = false;
	$check = "SELECT email, password From users";
	$checkres = mysqli_query($con, $check);
	if(mysqli_num_rows($checkres)>0){
		while($row = mysqli_fetch_assoc($checkres)){
			if($row["email"]==$email && $row["password"] == $pwd){
				$validUser = true;
			}
		}
	}
	;
	if($validUser == false){
		echo"<script>alert('Invalid Username or Password')</script>";
		#echo 'invalid userpwd';
		header("refresh:1; url=login.php");
	}
	elseif($validUser){
		if($type == "CareTaker"){
			echo 'CareTaker Succesful Login';
			header("refresh:1; url=login-ed_caretaker.php");
		}
		elseif($type =="Owner"){
			echo 'Owner Succesful Login';
			header("refresh:1; url=login-ed_owner.php");
		}
		else{
			#echo"<script>alert('Invalid Type, Please enter either Owner or CareTaker only!')</scipt>";
			#echo 'Invalid Type';
			echo"<script>alert('Invalid Type, Enter Owner or CareTaker Only')</script>";
			header("refresh:1; url=login.php");
		}
	}
	else{
		echo"<script>alert('fuck')</script>";
	}
?>

	