<?php

include 'config_1.php';


if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($conn,"DELETE FROM project_1 WHERE id = '$id'");
	
}

$sql = mysqli_query($conn,"SELECT * FROM project_1");
?>






<html>
<head>
<title>Data</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
<style>

body{
	  margin : 90px;
	  padding : 25px 15px;
	  color:black;
	background: rgba(255, 255, 102, 0.3);
	  font-family: 'Langar', cursive;
  }


</style>
</head>
<body>

<form method="POST" action="">

<h1>Project Details</h1>

<table class="table table-bordered table-striped">

<tr>

<td>Name</td>
<td>Last Name</td>
<td>Project Description</td>
<td>Date</td>
<td>Contact Details</td>

<td width="70px">Delete</td>
<td width="70px">Edit</td>

</tr>

<?php while($var=$sql->fetch_assoc()){?>
<tr>

<td><?php echo $var['name']?></td>
<td><?php echo $var['second']?></td>
<td><?php echo $var['project']?></td>
<td><?php echo $var['date']?></td>
<td><?php echo $var['contact']?></td>

<td><a href="tables_1.php?id=<?php echo $var['id']?>" class='btn btn-danger'>Delete</a></td>
<td><a href="tables_edit.php?id=<?php echo $var['id']?>" class='btn btn-info'>Edit</a></td>
</tr>

<?php } ?>
</table>
</body>
</html>

























