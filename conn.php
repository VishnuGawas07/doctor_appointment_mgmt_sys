<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'patientsdata');

if(!$con){
    echo " not connected";
}
?>