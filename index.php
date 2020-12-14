<?php
SESSION_START();
if($_SESSION['user_id']){
  if($_SESSION['user_role']=="admin"){
    header("Location:admin/index.php");
  }else{
    header("Location:employee/index.php");
  }
}else {
  include('config.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

    <form method="post">
        <label>Username</label>
        <input type="text" name="username" id="username" placeholder="Ex:Debar">

          <label>Password</label>
          <input type="password" name="password" id="password" placeholder="********" >

        <input type="submit" name="login" value="Login">
    </form>

  </body>
</html>
<?php
if(isset($_POST['login'])){
  $us=mysqli_real_escape_string($con,$_POST['username']);
  $user=filter_var($us,FILTER_SANITIZE_STRING);
  $ps=mysqli_real_escape_string($con,$_POST['password']);
  $password=filter_var($ps,FILTER_SANITIZE_STRING);
  $log_chk=mysqli_query($con,"SELECT user_id,role FROM login_regestor WHERE user_name='$user' AND password='$password' AND state_us='active'");
  if(mysqli_num_rows($log_chk)==1){
    $res=mysqli_fetch_array($log_chk);
    echo $res[0];
    $_SESSION['user_id']=$res[0];
    $_SESSION['user_role']=$res[1];
    if($res[1]=="admin"){
      header("Location:admin/index.php");
    }else{
      header("Location:employee/index.php");
    }
    echo $_SESSION['user_id'];
  }else{
    echo "<center><h3>UserName Or Password Invalid</h3></center>";
  }
}
 ?>
