<HTML>
	<HEAD>
		<TITLE>
			sdfgh9jhjh
		</TITLE>
		</HEAD>
	<body>
		<?php

	echo 'startk';
// SQL Server Extension Sample Code:
if(isset($_GET['value'])){
$connectionInfo = array("UID" => "pwmserver@cse322server", "pwd" => "amith@311296", "Database" => "motordata", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cse322server.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
	
if($conn){
echo 'aksgd';
}
		
	$sql = "insert into motordata values('".$_GET['value']."')";

	$stmt = sqlsrv_query( $conn, $sql);
  if($stmt){
    echo 'success'.$stmt;  
  }
	echo '2j';
	sqlsrv_close( $conn);
  }

?>
	</body>
</HTML>
