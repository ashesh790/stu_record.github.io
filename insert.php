<?php

include 'conn.php';

if(isset($_POST['done'])){

 $first_name = $_POST['first_name']; 
 $last_name=$_POST['last_name'];
 $numberoremail = $_POST['numberoremail']; 
 $password = $_POST['password'];
 $gender = $_POST['gender']; 
  $q = " INSERT INTO `student` ( `first_name`,`last_name`, `numberoremail`, `password`, `gender`) 
  VALUES ('$first_name','$last_name','$numberoremail', '$password','$gender');"; 

 $query = mysqli_query($con,$q);
 header('location:display.php');
}
?> 

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto"> 
 
 <form method="post">
 
 <br><br>
 <div class="card" style="background-color:lightseagreen; color:white;"> 
 
 <div class="card-header">
 <h1 class="text-white text-center">  Add Student </h1>
 </div><br>

 <label> First Name </label>
 <input type="text" name="first_name" class="form-control" required> <br> 

 <label> Last Name </label>
 <input type="text" name="last_name" class="form-control" required> <br>

 <label> number or email: </label>
 <input type="text" name="numberoremail" class="form-control" required> <br>

 <label> Password: </label>
 <input type="text" name="password" class="form-control" required> <br>

 <label> Gender </label>
 <input type="text" name="gender" class="form-control" required> <br>
<center>
      <button class="btn" type="submit" name="done"> Submit </button>
      <button class="btn" type="reset" name="reset"> Reset </button>
      <button class="btn" name="reset"> <a href="display.php"> Home </a></button>  
</center> 
<br> 
 </div> 
 </form>
 </div> 
</body>
</html>