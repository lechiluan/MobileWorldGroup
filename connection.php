<?php
	// Connect with Postgres
	$conn = pg_connect("postgresql://postgres:postgres@localhost:5432/postgres");
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>