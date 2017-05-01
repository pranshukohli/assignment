<html>
<head>
	<title>qwertyuio</title>
	<style>
body  {
    background-image: url("a.jpg");
    background-color: #cccccc;
	 background-size: 1400px 680px;
	 background-repeat:no-repeat;
	
}
button {
 
 position: absolute;
   background-color: #000000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
	-webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
 }
 
button:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.3),0 17px 50px 0 rgba(0,0,0,0.19);
}

button#b1 {
    top: 30%; left: 40%;
    
}

button#b2 {
    top: 40%; left: 50%;
    
}

button#b3 {
    top: 50%; left: 40%;
   
}

button#b4 {
    top: 40%; left: 30%;
    
}
button#b5 {
    top: 40%; left: 40%;
    
}
	</style>
<script>
function addData(str) 
{

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() 
	{

            if (this.readyState == 4 && this.status == 200) 
	    {
                document.getElementById("rval").innerHTML = this.responseText + str;
            }

        };
        xmlhttp.open("GET", "http://motorcon.azurewebsites.net/putdata.php?value=" + str, true);

        xmlhttp.send();

}
</script>
</head>
<body>


	<button onclick="addData('12551255')" id="b1">Forward&nbsp;&nbsp;&nbsp;</button>
<button onclick="addData('02551255')" id="b2">RIGHT</button>
<button onclick="addData('02550255')" id="b3">Backward</button>
<button onclick="addData('12550255')" id="b4">LEFT</button>
<button onclick="addData('00000000')" id="b5">STOP</button>
<p style="color: yellow">Last Added: <span id="rval"></span></p>
</body>
</html>
