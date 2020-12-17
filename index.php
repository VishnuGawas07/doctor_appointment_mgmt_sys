<!DOCTYPE html>
<html>
<head>
 <title></title>
 
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
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
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Doctors Appointment Management System </h1>
 </div><br>

 <button class="btn btn-primary "> <a href="insert.php" class="text-white" style="text-decoration: none;">Add New Entry </a> </button>


<h5 class="text-center"> Patient Entry Records</h5><br>

 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Patient Name</th>
 <th> Address </th>
 <th> Mobile Number </th>
 <th> Date & Time </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from patient ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <?php echo $res['mobile'];  ?> </td>
 <td> <?php echo $res['aptime'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

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
