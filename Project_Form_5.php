<?php
include 'config_1.php';

if (isset($_GET['id'])){
	$id = $_GET['id'];
	
	$sql = mysqli_query($conn, "SELECT * FROM project_1 WHERE id='$id'");
	$q = mysqli_fetch_array($sql);
	
	
}
?>



<html>
<head>
<title>EDIT</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Frijole&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bungee+Outline&family=Frijole&family=Langar&display=swap" rel="stylesheet">
  
  
  <style>
  
  body{
	  margin:70px;
	  padding:15px 15px;
	background: rgba(102, 255, 153, 0.3);
}
  
  


h2{
	font-family: 'Bungee Outline', cursive;
font-family: 'Frijole', cursive;
}

.form-horizontal{
	font-family: 'Bungee Outline', cursive;
font-family: 'Frijole', cursive;
font-family: 'Langar', cursive;
  font-size: 16px;
}

  
  </style>
</head>
<body>

<body>

<div class="container">
  <h2>If you want you can edit</h2>
  <form class="form-horizontal" action="" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" value="<?php echo $q['name']; ?>" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="second">Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="second" value="<?php echo $q['second']; ?>" name="second">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="project">Project Description:</label>
      <div class="col-sm-10">  
  <textarea class="form-control" id="project" name="project" rows="5" col="5" value="<?php echo $q['data']; ?>"></textarea>  
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="date">Date:</label>
      <div class="col-sm-5">          
        <input type="" class="form-control" id="date"  value = "<?php echo $q['date']; ?>" name="date">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact Details:</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="contact" value = "<?php echo $q['contact']; ?>" name="contact">
      </div>
    </div>
	
   
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button name="submit_1" type="submit" class="btn btn-success">Submit</button>
		
      </div>
    </div>
	
	
  </form>
</div>

</body>

</body>
</html>
