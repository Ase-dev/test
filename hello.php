<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
  </head>
  <body> 
 <?php   
$con = mysqli_connect("35.242.250.198","asemq","Comeonman2","account");	
  if(isset($_POST['get_date'])){	  
	 $busnum =  $_POST['busnum'];
	 $stuname =  $_POST['stuname'];					
$insert = mysqli_query($con, "INSERT INTO `test`(`busnum`,`stuname`) VALUES ('$busnum','$stuname')");
	 if(isset($insert)){
	 echo"Insert to database done";
	 }
  } 
?>
<div class="container">
</br>		
	</br>
<h1>Get</h1>
<form action="" method="post" >	
	<div class="center">	
	</br>		
	</br>		
	</br>	
	<div>
			  <select  style="width:300px; height:50px; " class="form-control input-lg" name="busnum"  id="busnum" required>
					  <option value=""> Choice Number </option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>						 
 </select> 
	</div>		
	</br>		
	</br>		
	</br>		
	<div>
    <input type="text" style="width: 300px; height:50px;"  class="form-control input-lg" name="stuname" id="stuname" placeholder="Enter Student Name"  required>
	</div>
	</br>		
	</br>		
	</br>
	<div>
	<button type="submit" style=" width:250px; height:60px; font-size : 20px; " name="get_date" class="btn btn-success" >Location</button> 
	</div>
	</div>
</form>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>