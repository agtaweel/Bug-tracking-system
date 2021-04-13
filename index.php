<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<title></title>
</head>
<body>
<header>
	<div class="container">
	<h1>Home Page </h1>	
	</div>
</header>
<main>
<h3>Please Enter Your name </h3>
<form action="process.php" method="get">
<span class="span" >Position</span>
	<input type="radio" name="pos" value="Tester">Tester
	<input type="radio" name="pos" value="Developer">Developer
	<input type="radio" name="pos" value="Manager">Manager
	<br/>
	<input class="submit" type="submit" value="Submit">
</form>
</main>
</body>
</html>