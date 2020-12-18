<?php
SESSION_START();
  if(!$_SESSION['user_id']){
    header('Location:../index.php');
  }else{
    ?>
    
    <?php
    include('../../config.php');
    $qu=mysqli_query($con,"SELECT * FROM `locations` ORDER BY loc_id DESC");
    if(mysqli_num_rows($qu)>0){
      ?>
      
      <section role="main" class="content-body">
					

					<!-- start: page -->
						<section class="panel">
							<header class="panel-heading">
								<h2 class="panel-title" >شوێن</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-sm-6">
										<div class="mb-md" >
											<button style="float:left; margin-bottom:30px;" id="addToTable" class="btn btn-primary"  data-toggle="modal" data-target="#add-employee">زیادکردنی شوێن <i class="fa fa-plus"></i></button>
										</div>
									</div>
								</div>
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead >
										<tr >
											
											<th>شوێن</th>
											<th>گۆڕانکاری</th>
                      
										</tr>
									</thead>
									<tbody>
      <?php
      while ($employs=mysqli_fetch_array($qu)) {
        ?>
        <tr>
          <td><?php echo $employs['loc_name'] ?></td>
          <td class="actions">
					<a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
					<a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
						</td>
        </tr>
        <?php
      }
      ?>
     	</tbody>
    </table>
      <?php
    }else{
      echo "0 Employees Found";
    }
    ?>
    <div class="modal fade" id="add-employee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">زیادکردنی شوێن</h5>
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
											
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label class="control-label">ناوی شوێن</label>
                        <input type="text" name="dgree" placeholder="ناوی شوێن" id="location" class="form-control">
											</div>
										</div>
									
									</div>
								
									
										
							
							</section>
						</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">لابردن</button>
        <input type="submit" class="btn btn-primary" name="" value="زیادکردن" id="add_loc_btn">

        
      </div>
    </div>
  </div>
</div>
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
