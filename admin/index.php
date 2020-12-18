<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    include('../config.php');
?>
    <?php 
    include("header.php");
    ?>
          <div class="root" id="root">
          </div>



          
          <?php 
    include("footer.php");
    ?>
<?php
}
 ?>
