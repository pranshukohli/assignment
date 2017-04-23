<html>
<head>
<script>
function addData(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("rval").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "http://motorcon.azurewebsites.net/putdata.php?value=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

	<button onclick="addData('11001100')">UP</button>
<p>Last Added: <span id="rval"></span></p>
</body>
</html>
