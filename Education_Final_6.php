<?php

include 'edu_config.php';

?>

<?php

if (isset($_POST['submit_1'])){
	$id = $_POST['hdnid'];
	$name = $_POST['name'];
	$second = $_POST['second'];
	$rnm = $_POST['rnm'];
	$number = $_POST['number'];
	$project = $_POST['project'];
	
	$sql = mysqli_query($conn,"UPDATE education SET name = '$name', second='$second', rnm = '$rnm', number = '$number', project = '$project'");
	
	header('edu_insert.php');
	
}
?>
