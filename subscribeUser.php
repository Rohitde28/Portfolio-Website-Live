<?php 
include("db.php");
if(isset($_POST["email"])){
	$email=$_POST["email"];
	$contact=$_POST["contact"];
	$ar=array();
	if(!mysqli_query($conn,"insert into subscribeUsers (`email`,`contact`) values ('$email','$contact')")){
		echo mysqli_error($conn);
		$ar["status"]="failed";
	}else{
		$ar["status"]="success";
		$ar["email"]=$email;
		$ar["contact"]=$contact;
	}
	echo json_encode($ar);
	mysqli_close($conn);
}

?>
