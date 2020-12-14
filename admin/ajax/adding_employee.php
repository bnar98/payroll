<?php
SESSION_START();
if(!$_SESSION['user_id']){
  header('Location:../index.php');
}else{
  include('../../config.php');
  if(isset($_POST["dgree_fund"])){
    $n=mysqli_real_escape_string($con,$_POST['name']);
    $name=filter_var($n,FILTER_SANITIZE_STRING);
    $d=mysqli_real_escape_string($con,$_POST['dgree']);
    $dgree=filter_var($d,FILTER_SANITIZE_STRING);
    $m=mysqli_real_escape_string($con,$_POST['main_salary']);
    $main_salary=filter_var($m,FILTER_SANITIZE_STRING);
    $c=mysqli_real_escape_string($con,$_POST['child']);
    $child=filter_var($c,FILTER_SANITIZE_STRING);
    $w=mysqli_real_escape_string($con,$_POST['wife']);
    $wife=filter_var($w,FILTER_SANITIZE_STRING);
    $cer=mysqli_real_escape_string($con,$_POST['certificate']);
    $certificate=filter_var($cer,FILTER_SANITIZE_STRING);
    $dgfu=mysqli_real_escape_string($con,$_POST['dgree_fund']);
    $dgree_fund=filter_var($dgfu,FILTER_SANITIZE_STRING);
    $sp=mysqli_real_escape_string($con,$_POST['special_fund']);
    $special_fund=filter_var($sp,FILTER_SANITIZE_STRING);
    $df=mysqli_real_escape_string($con,$_POST['dengrouse_fund']);
    $dengrouse_fund=filter_var($df,FILTER_SANITIZE_STRING);
    $cf=mysqli_real_escape_string($con,$_POST['careere_fund']);
    $careere_fund=filter_var($cf,FILTER_SANITIZE_STRING);
    $ef=mysqli_real_escape_string($con,$_POST['engineering_fund']);
    $engineering_fund=filter_var($ef,FILTER_SANITIZE_STRING);
    $ce=mysqli_real_escape_string($con,$_POST['contract_employee']);
    $contract_employee=filter_var($ce,FILTER_SANITIZE_STRING);
    $jt=mysqli_real_escape_string($con,$_POST['job_title']);
    $job_title=filter_var($jt,FILTER_SANITIZE_STRING);

    $query=mysqli_query($con,"INSERT INTO employee_info VALUES (null,'$name','$name',$dgree,$main_salary,$child,$wife,'$certificate',$dgree_fund,'$special_fund','$dengrouse_fund','$careere_fund','$engineering_fund','$contract_employee','$job_title',NOW())");
    if($query){
    echo "1";
    }else {
      echo "string";
    }
  }
}

 ?>
