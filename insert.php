<?php

include 'conn.php';

if(isset($_POST['submit'])){

 $name = $_POST['pname'];
 $address = $_POST['address'];
 $mobile = $_POST['mobile'];
 $aptime = $_POST['aptime'];
 $q = " INSERT INTO `patient`(`name`, `address`,`mobile`,`aptime`) VALUES ( '$name', '$address','$mobile','$aptime') ";

 $query = mysqli_query($con,$q);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="col-lg-6 m-auto">
 
 <form method="post">
 
<br> <br><div>
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Doctors Appointment Management System </h1>
 </div><br>
<h5 class="text-center"> Add New Record</h5><br>
 <label> Name :</label>
 <input type="text" name="pname" class="form-control"> <br>

 <label> Address :</label>
 <input type="text" name="address" class="form-control"> <br>

 <label> Mobile Number :</label>
 <input type="text" name="mobile" class="form-control"> <br>

 <label for="birthdaytime">Appointment Date & Time : &nbsp; &nbsp;</label>
  <input type="datetime-local" id="aptime" name="aptime">
   
 <button class="btn btn-success mt-3  btn-block" type="submit" name="submit"> Submit </button><br>

 <button class="btn btn-primary mb-3 "> <a href="index.php" class="text-white" style="text-decoration: none;">Display the patient Entries </a> </button>

 </div>
 </form>
 </div>

</body>
</html>