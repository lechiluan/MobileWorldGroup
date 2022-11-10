<?php
    $conn = mysqli_connect('localhost','root','','db_mobileworld')
            or die("Can not connect database".mysqli_connect_error());

	// Connect with Postgres
	// $conn = pg_connect("postgres://lvwlkconmlygnw:2a24029486a109831f51f6dd7c6896cf4a37bc700f1ec792aa4a56bbd210693b@ec2-54-166-120-40.compute-1.amazonaws.com:5432/d9tlhv9d26ecu5");
	// if(!$conn)
	// {
	// 	die("Could not connect to database");
	// }
?>