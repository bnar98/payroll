<?php
$hos="localhost";
$usr="root";
$pass="";
$db="payrollmangmmentsystem";
$con=mysqli_connect($hos,$usr,$pass,$db);
if(!$con){
  echo "Connection Faild !!!!";
}
 ?>
