<?php
// from index page
include('class.php');
$pos = $_GET['pos'];

if($pos == 'Tester')
{
	//Redirect to tester.php
	$tester=new Tester;
	$tester->login();
}
elseif ($pos == 'Manager') {
	# code...
	//header('location:manger.php');
	$manger=new manger;
	$manger->login();
}
elseif ($pos == 'Developer') {
	# code...
	//header('location:developer.php');
	$dev=new Developer;
	$dev->login();
	
}
?>