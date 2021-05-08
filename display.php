<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">   
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-center" style="background-color:lightseagreen; color:white;"> Student Record data </h1>
 <h2><button class="btn" style="background-color:lightseagreen;" > <a href="insert.php" class="text-white"> Add student </a>  </button></h2>
 <br>
 <table  id="tabledata" class=" table  table-bordered">
 
 <tr class="text-white text-center" style="background-color:lightseagreen;">
 
 <th> Id </th>
 <th> First Name </th>
 <th> Designation </th>
 <th> salary </th>
 <th> Password </th>
 <th> Gender   </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

$con=mysqli_connect("localhost","root","","stu_rec");
 $q = "SELECT * FROM `student` ORDER BY `id` ASC ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>   
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['first_name'];  ?> </td>
 <td> <?php echo $res['last_name'];  ?> </td>
 <td> <?php echo $res['numberoremail'];  ?> </td>
 <td> <?php echo $res['password'];  ?> </td>
 <td> <?php echo $res['gender'];  ?> </td>
 <td> <button class="btn" style="background-color:lightseagreen;"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  
 </button> </td>
 <td> <button class="btn" style="background-color:lightseagreen;"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a>
 </button> </td>

 </tr> 

 <?php 
 } 
  ?> 
 
 </table>  

 </div>
 </div> 

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html> 