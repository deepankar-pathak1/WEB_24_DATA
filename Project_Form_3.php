<?php

include 'config_1.php';

?>


<?php

if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$second = $_POST['second'];
	$project = $_POST['project'];
	$date = $_POST['date'];
	$contact = $_POST['contact'];
	
	$sql = mysqli_query($conn,"INSERT INTO project_1 (name,second,project,date,contact) VALUES ('$name','$second','$project','$date','$contact')");
	
	header('location: form_1.php');
}

?>
