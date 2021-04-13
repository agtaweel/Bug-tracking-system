<?php
// view all bugs
 
include('class.php');
$name = $_GET['u_name'];

$db = new DB();
$db->connect();
$db->select('developer', '*', "dev_name = '".$name."'");
$devResult = $db->getResult();
$get_btn = $_GET['submit'];
if (!empty($devResult)){
	$dev = new Developer($devResult['id_dev'], $devResult['dev_name']);

	if ($get_btn == 'View my bugs'){
		echo "View bugs of ".$name;
		$dev->viewAssignedBugs();
	}
	$bugID = $_GET['bugID'];
	if ($get_btn == 'Update Bug Status')
			$dev->fixBug($bugID);
}
else {
	
	echo "developer ".$name." does not exist";
}

if ($get_btn == 'filter by priorty'){

	// view all bugs filterd by priorty
		$pr=$_GET['priorty'];
		$dev->view($pr);
	}
		//view all bugs filterd by type
elseif ($get_btn == 'filter by type'){
		$ty = $_GET['type'];
		$dev->viewtype($ty);
	}
?>