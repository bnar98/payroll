<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    ?>
    <div class="add_employee" id="add_employee" style="display:none">
      <form class="add_employee" method="post" id="up_form">
        <input type="text" name="dgree" placeholder="User Name" id="username">
        <input type="password" name="password" placeholder="password" id="password">
        <input type="location" name="location" placeholder="location" id="location">
        <select class="" name="" id="role">
          <option value="admin">Admin</option>
          <option value="manager">Manager</option>
        </select>

        <input type="submit" name="" value="Add" id="add_employ_btn">
      </form>
    </div>
    <button type="button" name="button" id="form_toggle">Add Employee</button>
    <?php

    include('../../config.php');
    $qu=mysqli_query($con,"SELECT * FROM `login_regestor` ORDER BY user_id DESC");
    if(mysqli_num_rows($qu)>0){
      ?>
      <table>
        <tr>
          <th>Name</th>
          <th>location</th>
          <th>create date</th>
          <th>State Us</th>
        </tr>
      <?php
      while ($employs=mysqli_fetch_array($qu)) {
        ?>
        <tr>
          <td><?php echo $employs['user_name'] ?></td>
          <td><?php echo $employs['location'] ?></td>
          <td><?php echo $employs['log_date'] ?></td>
          <td><?php if($employs['state_us']=="active"){
            ?><a href="#">Active</a> <?php
          }else{
            ?><a href="#">Deactive</a> <?php
          } ?></td>
        </tr>
        <?php
      }
      ?>
      </table>
      <?php
    }else{
      echo "0 Employees Found";
    }
    ?>
    <script type="text/javascript">
      $("#up_form").submit(function(e){
          return false;
      });
      $("#form_toggle").click(function(){
        $("#add_employee").toggle();
      });
      $("#add_employ_btn").click(function(){
        var username=$("#username").val();
        var password=$('#password').val();
        var location=$('#location').val();
        var role=$("#role").val();
        $.ajax({
            url:"ajax/adding_employee.php",
            method:"POST",
            data:{username,password,location,role},
            success:function(e){
              if(e=="1"){
                $.ajax({
                  url:"ajax/employees.php",
                  success:function(dat){
                    $("#root").html(dat);
                  }
                });
              }
            }
        });
      });
    </script>
    <?php
}
 ?>
