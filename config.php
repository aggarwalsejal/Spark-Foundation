<?php

	$conn = mysqli_connect("localhost","root","","sparks_bank");

	if(!$conn){
		die("Could not connect to the database due to the following error");
	}
?>