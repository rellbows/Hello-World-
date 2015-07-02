<html>
<head>
<title>Hello World</title>
</head>
<body>
<h1>Hello <?php 
 if(isset($_GET['name'])) { echo $_GET['name'];} else { echo "ADD NAME TO QUERY PARAMS!!!!";}
?>!</h1>
</body>
</html>
