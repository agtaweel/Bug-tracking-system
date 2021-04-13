<?php
include('database_class.php');

class Bug extends DB{
	public function __construct() {
		$this->connect();
	}
	public function addTheBugInfo($desc, $type, $priority, $status, $tester_id) {
        $this->insert('bug',array($desc,$type,$priority,$status, $tester_id),array('description','type','porirty','status', 'id_tester'));
	}
	public function assignBugToDev($DevID, $BugID) {
        $tr=$this->update('bug', array('id_dev'=>$BugID), 'id_bug = '.$DevID);
	}
	public function updateBugStatus($BugID) {
		$this->update('bug', array('status'=>'closed'), 'id_bug = '.$BugID);
	}
    public function viewBugsByStatus($theStatus) {
        $this->select('bug', '*', "status = '".$theStatus."'");
        $result = $this->getResult();
		echo "<pre>";
		print_r($result);
		echo "</pre>";
    }
    public function viewBugsByPriority($thePriority) {
        $this->select('bug', '*', "porirty = '".$thePriority."'");
        $result = $this->getResult();
		echo "<pre>";
		print_r($result);
		echo "</pre>";
    }
    public function viewBugsByType($theType) {
        $this->select('bug', '*', "type = '".$theType."'");
        $result = $this->getResult();
		echo "<pre>";
		print_r($result);
		echo "</pre>";
    }
    public function viewBugsAssignedToDev($DevID) {
        $this->select('bug', '*', 'id_dev = '.$DevID);
        $result = $this->getResult();
		echo "<pre>";
		print_r($result);
		echo "</pre>";
    }
	public function __destruct() {
		$this->disconnect();
	}
}
abstract class person{
	protected $name;
	protected $ID;
	public function view(){}
	public function login(){}
}

class Tester extends person{
	public function __construct($theID, $theName) { $this->name = $theName; $this->ID = $theID; }
	public function addBugInfo($desc,$type,$priority,$status) {
		$bug = new Bug();
		$bug->addTheBugInfo($desc,$type,$priority,$status, $this->ID);
	}
	public function login(){
		echo '<script language="javascript">';
		echo 'alert("now you will redirect to TESTER page")';
		echo '</script>';
		//header('location:tester.php');
		header( "refresh:0; tester.php" );
		exit;
	}
}

class manger extends person{

	public function login(){
	echo '<script language="javascript">';
	echo 'alert("now you will redirect to MANGER page")';
	echo '</script>';
	header( "refresh:0; manger.php" );
	//header('location:manger.php');
	exit;
	}

	public function view(){
			$db = new DB();
			$db->connect();
			$db->select('bug');
			$res = $db->getResult();
			echo "<pre>";
			print_r($res);
			echo "</pre>";
			$db->disconnect();

	}
	public function viewbystatusopen(){
			$db = new DB();
			$db->connect();
			$db->select('bug','*',"status= 'open' ");
			$res = $db->getResult();
			echo "<pre>";
			print_r($res);
			echo "</pre>";
			$db->disconnect();
	}
	public function viewbystatusclosed(){
			$db = new DB();
			$db->connect();
			$db->select('bug','*',"status= 'closed' ");
			$res = $db->getResult();
			echo "<pre>";
			print_r($res);
			echo "</pre>";
			$db->disconnect();
	}
	public function addtester($Name){
			$db = new DB();
			$db->connect();
			$db->insert('tester',array($Name),array('tester_name'));
			$db->disconnect();
		
	}
	public function adddeveloper($Name){
			$db = new DB();
			$db->connect();
			$db->insert('developer',array($Name),array('dev_name'));
			$db->disconnect();
	}
	public function assignBugToDev($BugID, $DevName) {
		$db = new DB();
		$db->connect();
		$db->select('developer', '*', "dev_name = '".$DevName."'");
		$result = $db->getResult();
		if (!empty($result)){
			$bug = new Bug();
			$bug->assignBugToDev($BugID, $result['id_dev']);
			return true;
		}
		else 
			return false;
		$db->disconnect();
	}

}
class Developer extends person{
	public function __construct($theID, $theName) { $this->name = $theName; $this->ID = $theID; }

	public function login(){
	echo '<script language="javascript">';
	echo 'alert("now you will redirect to DEVELOPER page")';
	echo '</script>';
	header( "refresh:0; developer.php" );
	//header('location:manger.php');
	exit;
	}
	public function view($pr){
		$bug = new Bug();
		$bug->viewBugsByPriority($pr);
	}
	public function viewtype($ty){
		$bug = new Bug();
		$bug->viewBugsByType($ty);
	}
	public function fixBug($BugID) {
		$db = new DB();
		$db->connect();
		$db->select('bug', '*', 'id_Bug = '.$BugID.' AND id_dev = '.$this->ID." AND status = 'open'");
		$result= $db->getResult();
		if (!empty($result)){
			echo "bug status now is closed"."<br/>";
			$bug = new Bug();
			$bug->updateBugStatus($BugID);
		}
		else 
			return false;
		return true;
		$db->disconnect();
	}
	public function viewAssignedBugs() {
		$bug = new Bug();
		$bug->viewBugsAssignedToDev($this->ID);
		return true;
	}
}

?>