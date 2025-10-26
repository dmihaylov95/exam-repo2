<?php
	// CONNECTION INFORMATION START 
	// PHP Data Objects(PDO) Sample Code:
	try {
		$conn = new PDO("sqlsrv:server = tcp:sqlserver-exam.database.windows.net,1433; Database = ExamDB", "demouser", "{your_password_here}");
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $e) {
		print("Error connecting to SQL Server.");
		die(print_r($e));
	}

	// SQL Server Extension Sample Code:
	$connectionInfo = array("UID" => "demouser", "pwd" => "MiTkO_231300", "Database" => "ExamDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
	$serverName = "tcp:sqlserver-exam.database.windows.net,1433";
	$conn = sqlsrv_connect($serverName, $connectionInfo);
	// CONNECTION INFORMATION END
?>
