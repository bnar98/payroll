<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    ?>
    <div class="add_loc" id="add_loc" style="display:none">
      <form class="add_employee" method="post" id="up_form">
        <input type="text" name="location" placeholder="Location" id="location">

        <input type="submit" name="" value="Add" id="add_loc_btn">
      </form>
    </div>
    <button type="button" name="button" id="form_toggle">Add Location</button>
    <?php
    include('../../config.php');
    $qu=mysqli_query($con,"SELECT * FROM `locations` ORDER BY loc_id DESC");
    if(mysqli_num_rows($qu)>0){
      ?>
      <table>
        <tr>
          <th>location</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      <?php
      while ($employs=mysqli_fetch_array($qu)) {
        ?>
        <tr>
          <td><?php echo $employs['loc_name'] ?></td>
          <td><a href="#" >Edit</a></td>
          <td><a href="#" >delete</a></td>
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
        $("#add_loc").toggle();
      });
      $("#add_loc_btn").click(function(){
        var location=$("#location").val();
        $.ajax({
            url:"ajax/adding_location.php",
            method:"POST",
            data:{location},
            success:function(e){
              if(e=="1"){
                $.ajax({
                  url:"ajax/locations.php",
                  success:function(dat){
                    $("#root").html(dat);
                  }
                });
              }else{
                alert(e);
              }
            }
        });
      });
    </script>
    <?php
  }
 ?>
