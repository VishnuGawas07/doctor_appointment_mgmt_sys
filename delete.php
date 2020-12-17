<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `patient` WHERE id = $id ";

mysqli_query($con, $q);

header('location:index.php');

?>
