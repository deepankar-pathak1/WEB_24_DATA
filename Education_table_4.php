<?php

include 'edu_config.php';

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($conn,"DELETE FROM education WHERE id = '$id'");
	
}


$sql = mysqli_query($conn,"SELECT * FROM education");

?>

<html>
<head>
<title>EDUCATION_LIST</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">

<style>

body{
	margin:70px;
	padding:10px 10px;
}
</style>
</head>

<body>

<form method="POST" action="">

<h1>Table of Education details</h1><br>

<table class="table table-bordered table-striped">

<tr>


<td>Name</td>
<td>Last Name</td>
<td>Roll No</td>
<td>Number</td>
<td>FeedBack</td>

<td width="70px">Delete</td>
<td width="70px">Edit</td>


</tr>

<?php while($var=$sql->fetch_assoc()){?>

<tr>

<td><?php echo $var['name']?></td>
<td><?php echo $var['second']?></td>
<td><?php echo $var['rnm']?></td>
<td><?php echo $var['number']?></td>
<td><?php echo $var['project']?></td>

<td><a href="edu_table.php?id=<?php echo $var['id']?>" class='btn btn-danger'>DELETE</a></td>
<td><a href="edu_edit.php?id=<?php echo $var['id']?>" class='btn btn-info'>EDIT</a></td>
</tr>
<?php } ?>
</table>
</form>
</body>
</html>

