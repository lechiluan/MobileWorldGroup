<?php
	// Connect with Postgres
	$conn = pg_connect("postgresql://u7ewwaqja4x3gutrvnyu:UJpOYrebXUadNFE1hDZg9PWwHSktQ4@bhfwzt0rodk7rww4ibj1-postgresql.services.clever-cloud.com:5432/bhfwzt0rodk7rww4ibj1");
	if(!$conn)
	{
		die("Could not connect to database");
	}
?>