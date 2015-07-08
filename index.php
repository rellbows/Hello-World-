<html>
	<head>
		<title>Hello World</title>
	</head>
	<body>
		<h1>
			<?php 
				if(isset($_GET['name']) && !empty($_GET['name']) && isset($_GET['lastname']) && !empty($_GET['lastname'])) { 
					echo "Hello " . $_GET['name'] . " " . $_GET['lastname'] . "!";
				} else { 
					echo "<span style='color:red;'>NO NAMES DECLARED! WHO ARE YOU?</span>";
				}
			?>
		</h1>
	</body>
</html>
