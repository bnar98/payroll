<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    include('../config.php');
?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Admin Dashboard</title>
      </head>
      <body>
          <ul>
            <li><a href="#" id="employs">Employees</a></li>
            <li><a href="#" id="users">Users</a></li>
            <li><a href="#" id="locations">Locations</a></li>
          </ul>
          <div class="root" id="root">
          </div>



          <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
          <script type="text/javascript" src="js/index.js"></script>
      </body>
    </html>
<?php
}
 ?>
