<HTML>
	<HEAD>
		<TITLE>
			sdfgh
		</TITLE>
		</HEAD>
	<body>
		<?php

	echo 'startk';
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "pwmserver@cse322server", "pwd" => "amith@31129", "Database" => "motordata", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cse322server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	

	$sql = "Select * from motordata";

	$stmt = sqlsrv_query( $conn, $sql);
	if (sqlsrv_num_rows($stmt) > 0) {
		echo '2';
    // output data of each row
    while($row = sqlsrv_fetch($stmt)) {
        echo $row['value'];
	   
    }
} else {
    echo "0 results";
}


	echo '2j';
	
	echo '3ghhg';
	sqlsrv_close( $conn);

?>
	</body>
</HTML>
