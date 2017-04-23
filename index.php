<html>
<head>
	<title>qwertyuio</title>
<script>
function addData(str) {
		alert('0');

        var xmlhttp = new XMLHttpRequest();
	alert('1');
        xmlhttp.onreadystatechange = function() {
			alert('2');

            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rval").innerHTML = this.responseText;
            }
			alert('3');

        };
        xmlhttp.open("GET", "http://motorcon.azurewebsites.net/putdata.php?value=" + str, true);
		alert('4');

        xmlhttp.send();
		alert('5');

    }
}
</script>
</head>
<body>

	<button onclick="addData('11001100')">UP</button>
<p>Last Added: <span id="rval"></span></p>
</body>
</html>
