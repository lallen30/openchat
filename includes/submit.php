<?php
include 'includes/connect.php';

//check if form was submitted

if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

	//set timezone
	date_default_timezone_set('America/New_York');
	$time = date('h:i:s', time());

  if(!isset($user) || $user == ''){
		$error = "First name is a requird field.";
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else 	if(!isset($message) || $message == ''){
  		$error = "Message is a requird field.";
  		header("Location: index.php?error=".urlencode($error));
  		exit();
  	} else {
		echo $query = "INSERT INTO chats (user, message, time) VALUES ('$user', '$message', '$time')";

		if(!mysqli_query($con, $query)){
			die('Error: ' . mysqli_error($con));
		} else{
			header("Location: index.php");
			exit();
		}
	}
}

?>
