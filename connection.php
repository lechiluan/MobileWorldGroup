<?php

	// Connect with MySQL

	$conn = mysqli_connect("localhost", "root", "", "db_mobileworld");

	if(!$conn)

	{

		die("Could not connect to database: " . mysqli_connect_error());

	}

	mysqli_set_charset($conn, "utf8");



	function db_fetch_assoc($result) {

		$row = mysqli_fetch_assoc($result);

		return $row ? array_change_key_case($row, CASE_LOWER) : false;

	}

?>

