<?php
//include('database_class.php');
include('class.php');
$manger=new manger;
// adding new developer to database
$Name=$_GET['name'];
//$db = new DB();
//$db->connect();

$sub=$_GET['submit'];
$selectmenu=$_GET['filter_status'];
if($sub=="Add Tester")
{
	echo "Tester has been added"."<br/>";
	$manger->addtester($Name);
}
elseif ($sub=="Add Developer") {
	# code...
	echo "Developer has been added"."<br/>";
	$manger->adddeveloper($Name);
}
elseif ($sub=="view all bugs") {
	# code...
	echo "view all bugs";
	$manger->view();
}
elseif ($sub=="View By status") {
	# code...
	echo "view by status"."<br/>";
	if($selectmenu=='open'){
		echo "open"."<br/>";
		// ya maza 3'ayir d w 5aleha ta5od paramater opn or close
	$manger->viewbystatusopen();
	}
	else{
	echo "close"."<br/>";
	$manger->viewbystatusclosed();
	}
}
elseif ($sub == "assign bug to dev") {
	//echo "I've been called";
	$bugID = $_GET['bugID'];
	$devName = $_GET['devName'];
	if ($manger->assignBugToDev($bugID, $devName))
		echo "Bug assigned to ".$devName;
	else 
		echo "Bug not assigned";
}

?>