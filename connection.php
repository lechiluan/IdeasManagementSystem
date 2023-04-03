<?php
    // Connect with MySQL
	$conn = mysqli_connect("localhost", "root", "", "db_ideas");
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>