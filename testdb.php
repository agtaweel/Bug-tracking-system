<?php
/*
include"db.php";
$query="SELECT * FROM tester ORDER BY id DESC";
	$shout=mysqli_query($con,$query);
	echo "test";
*/
?>
<?php include('db.php');
$sql = "SELECT * FROM tester";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "here will be result";?>

    <br/>
    <?php while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id_tester"]. " - Name: " . $row["tester_name"].  "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
