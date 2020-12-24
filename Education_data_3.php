<?php

include 'edu_config.php';

?>


<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$second = $_POST['second'];
	$rnm = $_POST['rnm'];
	$number = $_POST['number'];
	$project = $_POST['project'];
	
	$sql = mysqli_query($conn,"INSERT INTO education (name,second,rnm,number,project) VALUES ('$name','$second','$rnm','$number','$project')");
	
	header('location: edu_insert.php');
}

?>
