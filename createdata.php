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
$connectionInfo = array("UID" => "pwmserver@cse322server", "pwd" => "amith@311296", "Database" => "motordata", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cse322server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	
if($conn){
echo 'aksgd';
}
	$row="q";	
	$sql = "SELECT * FROM motordata ORDER BY id DESC LIMIT 1";

	$stmt = sqlsrv_query( $conn, $sql);
		echo '21';
	
		if(sqlsrv_has_rows($stmt)){
    // output data of each row
			echo '123';
    while($row = sqlsrv_fetch_array($stmt)) {
        echo $row['value'];
	   
    }
		
		}
	echo "sdfg";

	sqlsrv_close( $conn);

?>
	</body>
</HTML>
