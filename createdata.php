<HTML>
	<HEAD>
		<TITLE>
			skjhksj
		</TITLE>
	</HEAD>
	
	<BODY>
		
		
<?php

	echo 'startk';
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "pwmserver@cse322server", "pwd" => "amith@311296", "Database" => "motordata", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cse322server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	
if($conn){
echo 'bh';
}
	$row="q";	
	$sql = "SELECT value FROM motordata where ID=(select MAX(ID) from motordata);";

	$stmt = sqlsrv_query( $conn, $sql);
		//echo 'jji';
	
		if(sqlsrv_has_rows($stmt)){
    // output data of each row
			//echo '666';
    while($row = sqlsrv_fetch_array($stmt)) {
        echo "<p>Hello=".$row['value']."</p>";
	   
    }
		
		}
	echo "gfhjk";

	sqlsrv_close( $conn);

?>
	</BODY>
</HTML>
