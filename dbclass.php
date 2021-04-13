<?php
include('database_class.php');
$db = new DB();
$db->connect();
$db->select('tester');
$res = $db->getResult();
echo "<pre>";
print_r($res);
echo "</pre>";

?>