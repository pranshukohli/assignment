
<html>
<title>
Workshop
</title>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="css/index.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Workshops</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">Sign up</a>
      </li>
    </ul>
  </div>
</nav>
<br>
<br>
<div class="row">
	<div class="col-md-2">
	</div>
	
	<div class="col-md-8">
		<div class="gridx">
		
			<h2>Live Workshops</h2>
		
			<div class="hidden-sm-down head">
				<div class='row'>
					<div class="col-sm-5">Title</div>
					<div class="col-sm-3">Venue</div>
					<div class="col-sm-2">Last Date</div>
					<div class="col-sm-2"></div>
				</div>
			</div>
			<?php
			$connectionInfo = array("UID" => "interserver@interserver", "pwd" => "qwerty#123", "Database" => "base", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:interserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
			
			if($conn){
//echo 'bh';
}	
	$sql = "SELECT * FROM workshops;";
	$stmt = sqlsrv_query( $conn, $sql);
		//echo 'jji';
	
		if(sqlsrv_has_rows($stmt)){
    // output data of each row
			//echo '666';
    while($result = sqlsrv_fetch_array($stmt)) {
        echo "<div class='row'>";
				echo '<div class="col-sm-5">'.$result['title'].'</div>';
				echo '<div class="col-sm-3">'.$result['venue'].'</div>';
				echo '<div class="col-sm-2">'.$result['applylastdate'].'</div>';
								echo '<div class="col-sm-2"><button type="button" class="btn btn-light"><a href="apply.php/?ws='.$result['val'].'">Apply Now</a></button></div>';

			    echo "</div>";
	   
    }
		
		}
	//echo "gfhjk";
	sqlsrv_close( $conn);
			?>
		</div>
	</div>
	<div class="col-md-2">
	</div>
</div>

</body>
</html>
