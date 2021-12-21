<?php

	$conn = mysqli_connect('localhost','root','','nmbank');

	if(!$conn){
		die("Could not connect due to the error : ".mysqli_connect_error());
	}

?>