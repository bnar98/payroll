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
      <section role="main" class="content-body">
					

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title" >کارمەندەکان</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md" >
											<button style="float:left; margin-bottom:30px;" id="addToTable" class="btn btn-primary"  data-toggle="modal" data-target="#add-employee">زیادکردنی کارمەند <i class="fa fa-plus"></i></button>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead >
										<tr >
											<th >ناوی کارمەندو</th>
											<th>ناونیشانی وەزیفی</th>
											<th>شار</th>
                      <th>موچەی بنەڕەتی</th>
                      <th>گۆڕانکاری</th>
										</tr>
									</thead>
									<tbody>
      <?php
      while ($employs=mysqli_fetch_array($qu)) {
        ?>
        <tr>
          <td><?php echo $employs['employee_name'] ?></td>
          <td><?php echo $employs['Job_Title'] ?></td>
          <td><?php echo $employs['City'] ?></td>
          <td><?php echo $employs['Mian_salary'] ?></td>
          <td class="actions">
					<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
					<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>        </tr>
        <?php
      }
      ?>
      </tbody>
    </table>
      <?php
    }else {
      echo "0 Employees Found";
    }
    ?>
    
    </div>
            </section>
  <div class="modal fade" id="add-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">زیادکردنی کارمەند</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float:left; margin-top:-20px;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="">
							<section class="panel">
							
								<div class="panel-body">
									<div class="row">
                  <div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">ناونیشانی وەزیفی</label>
                        <input type="text" name="dgree" placeholder="ناوی بەکارهێنەر" id="username" class="form-control">
											</div>
										</div>
									
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">ناوی کارمەند</label>
                        <input type="text" name="dgree" placeholder="ناوی بەکارهێنەر" id="username" class="form-control">
											</div>
										</div>
                  </div>
									
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">بڕوانامەی کارمەند</label>
                        
												
						            	<select class="form-control" id="role">
                            <option value="admin" selected>بێ بڕوانامە</option>
                            <option value="manager" selected>دبلۆم</option>

													
													</select>
												
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
                      <label class="control-label">باری خێزانی کارمەند</label>
                        
												
                        <select class="form-control" id="role">
                          <option value="admin" selected>سەلت</option>
                          <option value="manager" selected>هاوسەردار</option>

                        
                        </select>
                      </div>
										</div>
                  </div>
                  
                  <div class="row">
                     <div class="col-sm-3">
                        <div class="form-group">
                          <label class="control-label">   ژمارەی منداڵ</label>
                          <input type="text" name="dgree" placeholder="ناوی بەکارهێنەر" id="username" class="form-control">
                        </div>
                        
                      </div>
                      
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label class="control-label"> پلەی کارمەند</label>
                          <input type="text" name="dgree" placeholder="ناوی بەکارهێنەر" id="username" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label"> موچەی بنەڕەتی</label>
                          <input type="number" name="dgree" placeholder="ناوی بەکارهێنەر" id="username" class="form-control">
                        </div>
                      </div>

                      </div>
                      <div class="row">
                       
                        <div class="">
                      <div class="form-group">
                        <label class="control-label"> ئەو دەرماڵانەی کارمەند ئەیگرێتەوە</label>
                        <div class="row">
                          
                          <div class="col-sm-3">
                            
                            <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            دەرماڵەی پایە
                          </label>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                           دەرماڵەی تایبەت
                          </label>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                            دەرماڵەی مەترسی
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                          
                      <div class="col-sm-3">
                        
                        <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                        دەرماڵەی هەندەسە
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-5">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                      <label class="form-check-label" for="defaultCheck1">
                       ئایە کارمەند بە شێوەی گرێبەست دامەزراوە؟
                      </label>
                    </div>
                  </div>

                 
                </div>
                        
                        </div>
                      </div>
                    </div>
                  </div>

								</div>
							</div>
							</section>
						</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">لابردن</button>
        <input type="submit" class="btn btn-primary" name="" value="زیادکردن" id="add_employ_btn">

        
      </div>
    </div>
  </div>
</div>
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
