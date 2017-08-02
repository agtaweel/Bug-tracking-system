<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8"/>
	<title>Manager </title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
	<header>
		<div class="container">
			<h1>Manager Page </h1>
		</div>
	</header>
	<main>
	<!--adding tester and developer to database-->
	<form action="manger_process.php" method="get" >
		<input type=" text" id="input" name="name" placeholder="enter name"/><br>
		
		<input type="submit" class="submit" class="text" value="Add Tester" name="submit"/>
		<input type="submit" class="submit" value="Add Developer"name="submit" />

	<!--redirect to review all bugs -->
	<div class="pos-bug">
	<!--<form action="developer_process.php" method="get" >-->
	<!--<form action="manger_process.php" method="get" >-->
		<input type="submit" id="btn-bug" value="view all bugs"name="submit">
		<br/>
		<select name="filter_status" >
			<option value="open">open</option>
			<option value="close">closed</option>
		</select>
		<input type="submit" class="submit" value="View By status"name="submit" />
		<br/>
		<span class="span">BugID </span>	
		<input type="text" name="bugID" value="" placeholder="enter bug ID" id="input">
		<br/>
		<span class="span">Developer's name </span>	
		<input type="text" name="devName" value="" placeholder="enter developer's name" id="input">
		<br/>
		<input type="submit" class="submit"id="assign" value="assign bug to dev" name=" submit">
	</form>
	</div>
	</main>

</body>
</html>

