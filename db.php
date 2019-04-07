<?php
	
	$host = "ec2-184-72-238-22.compute-1.amazonaws.com";
	$user = "ucqjpvdxugapra";
	$password = "429829ab1ca4a3c32fdfca39951b8e8ba9f80416b5ec6b23edeb8917b0ccf8d1";
	$dbname = "dedj4h50no26nd";
	$port = "5432";

	try{
		// Set DSN data source name
		$dsn = "pgsql:host=" . $host . "; 
				port=" . $port . ";
				dbname=" . $dbname . ";
				user=" . $user . ";
				password=" . $password . ";
				";

		// create a pdo instance
		$pdo = new PDO($dsn, $user, $password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
		$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e){
		echo 'Connection Failed' . $e->getMessage();
	}
?>