<?php

	$servername = "localhost";
	$username = "id17450812_root";
	$password = "";
	$dbname = "id17450812_banks";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if($conn){
		//Connection successfully established
	  }
	  
	  else
		  die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
		  
	  ?>
	  
