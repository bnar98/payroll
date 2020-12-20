<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    ?>
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
									<div class="col-sm-6 add-btn">
										<div class="mb-md" >
											<button  id="addToTable" class="btn btn-primary"  data-toggle="modal" data-target="#add-employee">زیادکردنی کارمەند <i class="fa fa-plus"></i></button>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead >
										<tr >
											<th >ناوی کارمەند</th>
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
					<a href="#" data-toggle="modal" data-target="#edit-employee-modal" class="on-default" class="on-default "><i class="fa fa-pencil"></i></a>
					<a href="#" data-toggle="modal" data-target="#modaldelete" class="on-default"><i class="fa fa-trash-o"></i></a>
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
  <div class="modal fade" id="add-employee" tabindex="-1" role="dialog" aria-labelledby="add-employess-modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-employess-modal">زیادکردنی کارمەند</h5>
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
                        <input type="text"name="Job_Title" placeholder="ناونیشانی وەزیفی " id="job_title" class="form-control">
											</div>
										</div>
									
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">ناوی کارمەند</label>
                        <input type="text"  name="name" placeholder="ناوی کارمەند" id="name" class="form-control">
											</div>
										</div>
                  </div>
									
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">بڕوانامەی کارمەند</label>
                        
												
						            	<select class="form-control" id="certificate">
                            <option value="diploma " selected>دبلۆم</option>
                            <option value="bachelor " >بەکالۆریەس</option>

													
													</select>
												
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
                      <label class="control-label">باری خێزانی کارمەند</label>
                        
												
                        <select class="form-control" id="wife">
                          <option value="no" selected>سەلت</option>
                          <option value="yes" >هاوسەردار</option>

                        
                        </select>
                      </div>
										</div>
                  </div>
                  
                  <div class="row">
                     <div class="col-sm-3">
                        <div class="form-group">
                          <label class="control-label">   ژمارەی منداڵ</label>
                          <input type="text" name="child" placeholder=" ژمارەی منداڵ" id="child" class="form-control">
                        </div>
                        
                      </div>
                      
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label class="control-label"> پلەی کارمەند</label>
                          <input type="text"  name="dgree" placeholder="پلەی کارمەند" id="dgree" class="form-control">
                        </div>
                        
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label class="control-label"> موچەی بنەڕەتی</label>
                          <input type="number" name="main_salary" placeholder=" موچەی بنەڕەتی" id="main_salary" class="form-control">
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
                          <input class="form-check-input" type="checkbox" value="yes" id="dgree_fund">
                          <label class="form-check-label" for="dgree_fund">
                            دەرماڵەی پایە
                          </label>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="yes" id="special_fund">
                          <label class="form-check-label" for="special_fund">
                           دەرماڵەی تایبەت
                          </label>
                        </div>
                      </div>

                      <div class="col-sm-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="yes" id="dengrouse_fund">
                          <label class="form-check-label" for="dengrouse_fund">
                            دەرماڵەی مەترسی
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                          
                      <div class="col-sm-3">
                        
                        <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="yes" id="engineering_fund">
                      <label class="form-check-label" for="engineering_fund">
                        دەرماڵەی هەندەسە
                      </label>
                    </div>
                  </div>

                  <div class="col-sm-5">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="yes" id="careere_fund">
                      <label class="form-check-label" for="careere_fund">
                       دەرماڵەی پیشەیی
                      </label>
                    </div> </div></div></div></div></div>

                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label class="control-label">جۆری دامەزراندنی کارمەند</label>
                            <select class="form-control" id="contract_employee">
                              <option value="no " selected>کارمەند بە شێوەی هەمیشەیی دامەزراوە</option>
                              <option value="yes " >کارمەند بە شێوەی گرێبەست دامازراوە</option>
                            </select>
                          </div></div></div></div></div>

              <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">لابردن</button>
        <input type="submit" class="btn btn-primary" name="" value="زیادکردن" id="add_employ_btn">

      </div></div></div></div></section>




      <div id="modaldelete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="float: left;">&times;</button>
                    <h4 class="modal-title" style="text-align-last: center">سرینەوەی کارمەند</h4>
                </div>
                <div class="modal-body">

                  <h3>دڵنیای لە سڕینەوەی ناوی کارمەند؟؟</h3>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بەڵێ</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">نەخێر</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit-employee-modal" tabindex="-1" role="dialog" aria-labelledby="add-employess-modal" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="add-employess-modal">گۆرانکاری لە زانیاریەکانی کارمەند</h5>
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
                            <input type="text"name="Job_Title" placeholder="ناونیشانی وەزیفی " id="job_title" class="form-control">
                          </div>
                        </div>
                      
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">ناوی کارمەند</label>
                            <input type="text"  name="name" placeholder="ناوی کارمەند" id="name" class="form-control">
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">بڕوانامەی کارمەند</label>
                            
                            
                              <select class="form-control" id="certificate">
                                <option value="diploma " selected>دبلۆم</option>
                                <option value="bachelor " >بەکالۆریەس</option>
    
                              
                              </select>
                            
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                          <label class="control-label">باری خێزانی کارمەند</label>
                            
                            
                            <select class="form-control" id="wife">
                              <option value="no" selected>سەلت</option>
                              <option value="yes" >هاوسەردار</option>
    
                            
                            </select>
                          </div>
                        </div>
                      </div>
                      
                      <div class="row">
                         <div class="col-sm-3">
                            <div class="form-group">
                              <label class="control-label">   ژمارەی منداڵ</label>
                              <input type="text" name="child" placeholder=" ژمارەی منداڵ" id="child" class="form-control">
                            </div>
                            
                          </div>
                          
                          <div class="col-sm-3">
                            <div class="form-group">
                              <label class="control-label"> پلەی کارمەند</label>
                              <input type="text"  name="dgree" placeholder="پلەی کارمەند" id="dgree" class="form-control">
                            </div>
                            
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label class="control-label"> موچەی بنەڕەتی</label>
                              <input type="number" name="main_salary" placeholder=" موچەی بنەڕەتی" id="main_salary" class="form-control">
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
                              <input class="form-check-input" type="checkbox" value="yes" id="dgree_fund">
                              <label class="form-check-label" for="dgree_fund">
                                دەرماڵەی پایە
                              </label>
                            </div>
                          </div>
    
                          <div class="col-sm-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="yes" id="special_fund">
                              <label class="form-check-label" for="special_fund">
                               دەرماڵەی تایبەت
                              </label>
                            </div>
                          </div>
    
                          <div class="col-sm-3">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="yes" id="dengrouse_fund">
                              <label class="form-check-label" for="dengrouse_fund">
                                دەرماڵەی مەترسی
                              </label>
                            </div>
                          </div>
                        </div>
    
                        <div class="row">
                              
                          <div class="col-sm-3">
                            
                            <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="yes" id="engineering_fund">
                          <label class="form-check-label" for="engineering_fund">
                            دەرماڵەی هەندەسە
                          </label>
                        </div>
                      </div>
    
                      <div class="col-sm-5">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="yes" id="careere_fund">
                          <label class="form-check-label" for="careere_fund">
                           دەرماڵەی پیشەیی
                          </label>
                        </div> </div></div></div></div></div>
    
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="control-label">جۆری دامەزراندنی کارمەند</label>
                                <select class="form-control" id="contract_employee">
                                  <option value="no " selected>کارمەند بە شێوەی هەمیشەیی دامەزراوە</option>
                                  <option value="yes " >کارمەند بە شێوەی گرێبەست دامازراوە</option>
                                </select>
                              </div></div></div></div></div>
    
                  <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">لابردن</button>
            <input type="submit" class="btn btn-primary" name="" value="گۆڕانکاری" id="">
    
          </div></div></div></div>


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
