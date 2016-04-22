<html>
	<head>
		<title>Hello World</title>
	</head>
	<body>
	
		<ul id="header">
			<li>This is the NAME GAME!!!</li>
		</ul>
	
		<h1>
			<?php
				function isPresent($var) {
					return isset($var) && !empty($var);
					}
				if(isPresent($_GET['firstname']) && isPresent($_GET['lastname'])) {
					echo "Hello " . $_GET['firstname'] . " " . $_GET['lastname'] . "!";
				} else { 
					echo "<span style='color:red;'>NO NAMES DECLARED! WHO ARE YOU?</span>";
				}
			?>
		</h1>
	</body>
</html>
