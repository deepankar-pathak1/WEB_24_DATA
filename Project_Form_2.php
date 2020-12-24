<!DOCTYPE html>
<html lang="en">
<head>
  <title>PMS</title>
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
	  margin:90px;
	  padding:15px 15px;
	background: rgba(255, 255, 204, 0.3);
}
  
  


h1{
	font-family: 'Bungee Outline', cursive;
font-family: 'Frijole', cursive;
}

.form-horizontal{
	font-family: 'Bungee Outline', cursive;
font-family: 'Frijole', cursive;
font-family: 'Langar', cursive;
  font-size: 16px;
}

.button2 {
	background-color: green;
    border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-left:680px;

}

  </style>
</head>
<body>

<div class="container">
  <h1>We Manage Project</h1>
  <form class="form-horizontal" action="data_1.php" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="second">Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="second" placeholder="Enter Last Name" name="second">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="project">Project Description:</label>
      <div class="col-sm-10">  
  <textarea class="form-control" id="project" name="project" rows="5" col="5" placeholder="What does Project say?"></textarea>  
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="date">Date:</label>
      <div class="col-sm-5">          
        <input type="date" class="form-control" id="date"  name="date">
      </div>
    </div>

<div class="form-group">
      <label class="control-label col-sm-2" for="contact">Contact Details:</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" id="contact" placeholder="How can i call?" name="contact">
      </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button name="submit" type="submit" class="btn btn-success">Submit</button>
		<a href="tables_1.php" target="_blank" class="button button2">Data</a>
		
      </div>
    </div>
	
	
  </form>
</div>

</body>
</html>
