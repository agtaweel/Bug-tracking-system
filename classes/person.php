<?php
abstract class person{
	public $name;
}

class tester extends person{
	public $id;
	public function _construct($name, $id) {
		$this->name = $name;
		$this->id = $id;
	}
	public function addBugInfo() {
		/*
		INSERT into bug 
		*/

	}
}

class manger extends person{

	public function view(){
		/*
			select * from bug ;
		*/
			include('db.php');
		$sql = "SELECT * FROM bug";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    // output data of each row
		    echo "here will be result";
		    echo "el select dh gy mn el class ya nas "."<br/> ";	
		    ?>

		    <br/>
		    <?php while($row = mysqli_fetch_assoc($result)) {
		        echo "id: " . $row["id_bug"]."<br/>". "description :". $row["description"]."<br>"." -type :".$row["type"] ."<br>"."-proiority :" .$row["porirty"]."<br>"."-status".$row["status"]."<br>";
		    }
		} else {
		    echo "0 results";
		}
	}
	public function addtester($name){
		/*
			insert into tester values (id==null -> ai ,tester name)
		*/
		
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "oop";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO tester (id_tester,tester_name)
			VALUES ('NULL','$name')";

			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
		public function adddeveloper($name){
		/*
			insert into developer values (id==null -> ai ,tester name)
		*/
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "oop";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "INSERT INTO developer (id_dev,dev_name)
			VALUES ('NULL','$name')";

			if (mysqli_query($conn, $sql)) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}

	}

}
class developer extends person{
	public function viewbug{
		/*
		VIEW BUGS 
		*/
	}
	public function upstatus{


	}
}

?>