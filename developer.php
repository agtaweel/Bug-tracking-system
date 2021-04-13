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
			<h1>DEVELOPER Page </h1>
		</div>
	</header>
	<form action="developer_process.php" method="get">
		<span class="span">user name </span>	
		<input type="text" name="u_name" value="" placeholder="enter your name" id="input">
		<hr width="50%" />
		<center>
		<span class="span">Filter By Priorty</span>
		<select name="priorty" >
			<option value="critical">critical</option>
			<option value="High">High</option>
			<option value="Medium">Medium</option>
			<option value="Low">Low</option>
		</select>
		<br/>
		<input class="submit" type="submit" name="submit" value="filter by priorty">
				<br/>
				</center>
				<hr width="50%" />
		<center>
		<span class="span" >Filter By Type</span>
		<select name="type" >
			<option value="Business">Business</option>
			<option value="Ui">Ui</option>
		</select>
		<br/>
		<input class="submit" type="submit" name="submit" value="filter by type">
		<br/>

		<hr width="50%" />
		</center>
		<input class="submit" type="submit" name="submit" value="View my bugs">
		<br/>
		<span class="span">Bug ID</span>	
		<input type="text" name="bugID" value="" placeholder="enter the bug ID" id="input">
		<br/>
		<input class="submit" type="submit" name="submit" value="Update Bug Status">
	</form>		
</body>
</html>