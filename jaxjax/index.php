<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 id="demo">Change Me!</h1>
	<input type="" placeholder="" name="">
	<button type="button" onclick="loadDoc()">Change Content</button>
	<button type="button" onclick="changeContent()">Change Content</button>

</body>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		function loadDoc(){
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function(){
				if(this.readyState==4&&this.status==200){
					document.getElementById("demo").innerHTML = this.responseText;
				}
			};
			xhttp.open("GET","sample.txt",true);
			xhttp.send();
		}

	function changeContent(){
		$("#demo").html("Changed!");
	}
	</script>
</html>