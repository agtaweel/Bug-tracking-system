<?php
include('class.php');
// from tester
$name = $_GET['u_name'];
$desc = $_GET['desc'];
$type = $_GET['type'];
$priority = $_GET['Priorty'];
$status = $_GET['bugstat'];

$db = new DB();
$db->connect();
$db->select('tester', '*', "tester_name = '".$name."'");
$result = $db->getResult();
if (!empty($result)){
	echo "<br/>"."Bug has been added by tester ".$name;
	$tester = new Tester($result['id_tester'], $result['tester_name']);
	$tester->addBugInfo($desc, $type, $priority, $status);
}
else{
	echo "tester name does not exist ";
}
// new object
//$tester_obj = new tester();
//$tester_obj->addBugInfo($desc,$type,$priority,$status);

?>