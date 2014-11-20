<html>
	<head>
		<script type="text/javascript">
			function load(thediv, thefile){
				if (window.XMLHttpRequest){
					xmlhttp = new XMLHttpRequest();
				}
				else {
					//other browsers handling style
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
				}
				// checking statechange correctness of code
				xmlhttp.onreadystatechange = function(){
					if (xmlhttp.readyState == 4  && xmlhttp.status == 200){
						//trigger here to insert php data into div file.
						document.getElementById(thediv).innerHTML = xmlhttp.responseText;
					}
				}
				xmlhttp.open('GET', thefile,true);
				xmlhttp.send();

			}
		</script>
	</head>	


	<body> 
		<input type="submit" value="refresh" onclick="load('adiv', 'develop_include.php');">

	     <div id="adiv"></div>

	</body>
</html>