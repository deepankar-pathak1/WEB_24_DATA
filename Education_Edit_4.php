<?php

include ('edu_config.php');

if (isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = mysqli_query($conn,"SELECT * FROM education WHERE id='$id'");
	$q = mysqli_fetch_array($sql);
	
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
  <title>EDUCATION</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Langar&family=Permanent+Marker&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">

</head>
<style>

  body{
	  margin:80px;
	  padding:15px 15px;
	  background-color:white;
	  color:black;
}
  
.form-control{
	font-family: 'Niconne', cursive;
	  font-size: 25px;
	      color: black;
		     
}  


h1{
	font-family: 'Langar', cursive;
	  font-size: 60px;
}

.button1{
	 margin-left:680px;
	    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: .25rem;
	  color: white;
	   cursor: pointer;
	    border-radius: 4px;
		 width: 42px;
  height: 42px;
      background-color: #28a745;
    border-color: #28a745;
}

</style>
<body>

<div class="container">
  <h1>Education Details</h1><br>

  <form method="POST" action="edu_data.php">
  <input type="hidden" name="hdnid" value = "<?php echo $id;?>">
    <div class="form-row">
      <div class="col">
        <input type="text" class="form-control" id="name" value="<?php echo $q['name']; ?>" name="name">
      </div>
      <div class="col">
        <input type="second" class="form-control"value="<?php echo $q['second']?>" name="second">
      </div>
    </div>
 
  <br>
  
  

    <div class="form-row">
      <div class="col">
        <input type="number" class="form-control" id="number" value="<?php echo $q['rnm']?>" name="rnm">
      </div>
      <div class="col">
        <input type="number" class="form-control" value="<?php echo $q['number']?>" name="number">
      </div>
    </div>
	
	<br>
	<div class="form-row">
	<div class="col">
	<textarea class="form-control" id="project" name="project" rows="5" col="5" ><?php echo $q['project']?></textarea>  
	</div>
	</div>
	
	<br>

	
	<button type="submit_1" class="btn btn-success" name="submit">SUBMIT CHANGES</button>
	
	<a href="edu_table.php" target="_blank" class="button button1">DATA</a>
	
  </form>
</div>

</body>
</html>
