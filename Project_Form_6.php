<?php

include 'config_1.php';

if (isset($_POST['submit_1'])){
	$id = $_POST['hdnid'];
	$name = $_POST['name'];
	$second = $_POST['second'];
	$project = $_POST['project'];
	$date = $_POST['date'];
	$contact = $_POST['contact'];
	
	$sql = mysqli_query($conn,"UPDATE project_1 SET name = '$name', second = '$second', project= '$project', date = '$date', contact= '$contact' where id='$id'");
	
		header('location: tables_1.php');
}

?>
