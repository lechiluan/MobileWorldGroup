<?php
	// Connect with Postgres
	$conn = pg_connect("host=localhost port=5432 dbname=db_mobileworld user=postgres password=19012001");
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>