<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    ?>
    <div class="add_employee" id="add_employee" style="display:none">
      <form class="add_employee" method="post" id="up_form">
        <input type="text" name="name" placeholder="Name" id="name">
        <input type="number" name="dgree" placeholder="Dgree" id="dgree">
        <input type="number" name="main_salary" placeholder="Main Salary" id="main_salary">
        <input type="number" name="child" placeholder="Number Of Child" id="child">
        <input type="number" name="wife" placeholder="Wife" id="wife">
        <input type="text" name="certificate" placeholder="certificate" id="certificate">
        <input type="number" name="dgree_fund" placeholder="Dgree Fund" id="dgree_fund">
        <input type="text" name="Special_fund" placeholder="Special Fund" id="special_fund">
        <input type="text" name="Dengrouse_fund" placeholder="Dengrouse Fund" id="dengrouse_fund">
        <input type="text" name="Careere_fund" placeholder="Careere Fund" id="careere_fund">
        <input type="text" name="engineering_fund" placeholder="Engineering Fund" id="engineering_fund">
        <input type="text" name="Contract_employee" placeholder="Contract Employee" id="contract_employee">
        <input type="text" name="Job_Title" placeholder="Job Title" id="job_title">
        <input type="submit" name="" value="Add" id="add_employ_btn">
      </form>
    </div>
    <button type="button" name="button" id="form_toggle">Add Employee</button>
    <?php
    include('../../config.php');
    $qu=mysqli_query($con,"SELECT * FROM `employee_info` ORDER BY employee_id DESC");
    if(mysqli_num_rows($qu)>0){
      ?>
      <table>
        <tr>
          <th>Name</th>
          <th>Job Title</th>
          <th>City</th>
          <th>Main Salary</th>
          <th>View</th>
          <th>Edit</th>
        </tr>
      <?php
      while ($employs=mysqli_fetch_array($qu)) {
        ?>
        <tr>
          <td><?php echo $employs['employee_name'] ?></td>
          <td><?php echo $employs['Job_Title'] ?></td>
          <td><?php echo $employs['City'] ?></td>
          <td><?php echo $employs['Mian_salary'] ?></td>
          <td><a href="#" >View</a></td>
          <td><a href="#" >Edit</a></td>
        </tr>
        <?php
      }
      ?>
      </table>
      <?php
    }else {
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
        var name=$("#name").val();
        var dgree=$('#dgree').val();
        var main_salary=$('#main_salary').val();
        var child=$("#child").val();
        var wife=$('#wife').val();
        var certificate=$('#certificate').val();
        var dgree_fund=$('#dgree_fund').val();
        var special_fund=$("#special_fund").val();
        var dengrouse_fund=$("#dengrouse_fund").val();
        var careere_fund=$('#careere_fund').val();
        var engineering_fund=$("#engineering_fund").val();
        var contract_employee=$("#contract_employee").val();
        var job_title=$("#job_title").val();
        $.ajax({
            url:"ajax/adding_employee.php",
            method:"POST",
            data:{name,dgree,main_salary,child,wife,certificate,dgree_fund,special_fund,dengrouse_fund,careere_fund,engineering_fund,contract_employee,job_title},
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
