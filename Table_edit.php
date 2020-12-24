<?php
include 'config.php';
?>

<html>
<head>
<title>EDIT</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
</head>

<style>
.container{
	margin:120px ;
	
}
</style>

<body>
<?php

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$sql = mysqli_query($conn, "SELECT * FROM newspaper where id='$id'");
	$q =mysqli_fetch_array($sql);

}	
?>
<body>

<div class="container">
  <h2>Edit form</h2>
  <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control"  value="<?php echo $q['name']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="psw">Last Name:</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" value="<?php echo $q['second']; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="data">Address:</label>
      <div class="col-sm-10">          
        <input type="" class="form-control" value="<?php echo $q['data']; ?>">
      </div>
    </div>
	<div class="form-group">
	<label class="control-label col-sm-2" for="number">Contact:</label>
	<div class="col-sm-10">
	<input type="" class="form-control" value="<?php echo $q['number'];?>">
	</div>
	</div>
   
  </form>
</div>

</body>
</html>
