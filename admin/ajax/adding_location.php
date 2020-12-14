<?php
SESSION_START();
if(!$_SESSION['user_id']){
  header('Location:../index.php');
}else{
  include('../../config.php');
  if(isset($_POST['location'])){
    $n=mysqli_real_escape_string($con,$_POST['location']);
    $location=filter_var($n,FILTER_SANITIZE_STRING);

    $query=mysqli_query($con,"INSERT INTO locations VALUES (null,'$location',NOW())");
    if($query){
    echo "1";
    }else {
      echo $location;
    }
  }
}
?>
