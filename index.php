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
<!doctype html>
<html class="" dir="rtl" lang="ku">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="admin/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="admin/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="admin/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="admin/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="admin/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body  style="background-color: #133136;">
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h3 class="title  text-bold m-none"><i class="fa fa-user mr-xs"></i>  چوونە ژورەوە</h3>
					</div>
					<div class="panel-body">
						<form method="post">
							<div class="form-group mb-lg" >
								<label>ناوی بەکارهێنەر</label>
								<div class="input-group input-group-icon" style="margin-right: -20px;">
									<input name="username" id="username" placeholder="ناوی بەکارهێنەر" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="">وشەی نهێنی</label>
								</div>
								<div class="input-group input-group-icon" style="margin-right: -20px;">
									<input name="password" id="password" placeholder="********" type="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
              </div>
              
								
								<div class="text-right">
									<button type="submit" name="login" class="btn btn-primary ">چوونە ژورەوە</button>
								</div>
							

						

						</form>
					</div>
				</div>

			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="admin/assets/vendor/jquery/jquery.js"></script>
		<script src="admin/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="admin/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="admin/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="admin/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="admin/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="admin/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

	</body><img src="http://www.ten28.com/fref.jpg">
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
