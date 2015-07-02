<html>
	<head>
		<title>Hello World</title>
	</head>
	<body>
		<h1>Hello 
			<?php 
				if(isset($_GET['name']) && isset($_GET['lastname'])) { 
					echo $_GET['name'] . " " . $_GET['lastname'];
				} else { 
					echo "ADD NAME TO QUERY PARAMS!!!!";
				}
			?>!
		</h1>
	</body>
</html>
