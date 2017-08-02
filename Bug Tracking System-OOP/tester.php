<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<title>
		Tester
	</title>
</head>
<body>
<header>
		<div class="container">
			<h1>TESTER Page To Add Info about Bug</h1>
		</div>
	</header>
	<form action="tester_process.php" method="get">
		<span class="span">user name </span>	
		<input type="text" name="u_name" value="" placeholder="enter your name" id="input">
		<br/>
		<span class="span">description</span>
		<br/>
		<textarea name="desc"></textarea> 
		<br/>
		<span class="span" >Type</span>
		<input type="radio" name="type" value="Business">Business
		<input type="radio" name="type" value="UI">UI
		<br/>
		<span class="span" >Priority</span>
		<input type="radio" name="Priorty" value="critical">Critical
		<input type="radio" name="Priorty" value="High">High
		<input type="radio" name="Priorty" value="Medium">Medium
		<input type="radio" name="Priorty" value="Low">Low
		<br>
		<input type="hidden" name="bugstat" value="open">
		<input class="submit" type="submit" >
		
	</form>		
</body>
</html>