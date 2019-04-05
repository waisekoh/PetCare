    
<?php
if(isset($_SESSION["temp"])){
	if($_SESSION["temp"] == "error1"){
		echo"<script>alert('Username is already taken')</script>";
	}
	elseif($_SESSION["temp"] == "error4"){
		echo"<script>alert('Password and Confirm Password do not match')</script>";			
	}
	$_SESSION["temp"]="";			//reset temp variable	
}
	?>