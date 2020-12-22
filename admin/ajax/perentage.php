 

        <!-- start: page -->
            <section class="panel">
                <header class="panel-heading">
                   <h2 class="panel-title">ڕێژەکان</h2>
                </header>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 add-btn" >
                            <div class="mb-md" >
                                <button  id="addToTable" class="btn btn-primary"  data-toggle="modal" data-target="#add">زیادکردن  <i class="fa fa-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped mb-none" id="datatable-editable">
                        <thead>
                            <tr>
                                <th>جۆر</th>
                                <th>مەرج</th>
                                <th>ڕێژە</th>
                                <th>کردارەکان</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeU">
                                <td>بڕوانامە</td>
                                <td>دبلۆم</td>
                                <td>45</td>
                                <td class="actions">
                                    <a href="#" data-toggle="modal" data-target="#modaledit" class="on-default" class="on-default "><i class="fa fa-pencil"></i></a>
                                    <a href="#" data-toggle="modal" data-target="#modaldelete" class="on-default"><i class="fa fa-trash-o"></i></a>
                                    </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
            <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="add">زیادکردنی مەرجی موچە</h5>
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
                                      <label class="control-label">مەرج</label>
                                      <input type="text" name="con" placeholder="مەرج " id="con" class="form-control">
                                   </div>
                                 </div>
                                <div class="col-sm-6">
                                  <div class="form-group">
                                    <label class="control-label">ناوی جۆر</label>
                                     <input type="text" name="type" placeholder=" جۆر" id="type" class="form-control">
                                      </div>
                                      </div></div>
                                <div class="row">
                                 <div class="col-sm-6">
                                 <div class="form-group">
                                  <label class="control-label">جۆری بڕ</label>
                                     <select class="form-control" id="type">
                                          <option value="admin" >ڕێژە</option>
                                          <option value="manager" selected>کاش</option>
              
                                        </select>
                                         </div>
                                          </div>
                                          <div class="col-sm-6">
                                            <div class="form-group">
                                         <label class="control-label">بڕ</label>
                                      <input type="location" name="persentage" placeholder="بڕ" id="persentage" class="form-control">
                                        </div>
                                          </div>
                                           </div>
                                         </div></section>
                                      </div></div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">لابردن</button>
                      <input type="submit" class="btn btn-primary" name="" value="زیادکردن" id="add_employ_btn">
              
                      
                    </div>
                  </div>
                </div>
              </div>
              
      <div id="modaldelete" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="float: left;">&times;</button>
                    <h4 class="modal-title" style="text-align-last: center">سرینەوەی مەرجی موچە</h4>
                </div>
                <div class="modal-body">

                  <h3>دڵنیای لە سڕینەوەی مەرج؟؟</h3>
    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بەڵێ</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">نەخێر</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="add">گۆڕانکاری لە مەرجی موچە</h5>
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
                              <label class="control-label">مەرج</label>
                              <input type="text" name="con" placeholder="مەرج " id="con" class="form-control">
                           </div>
                         </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">ناوی جۆر</label>
                             <input type="text" name="type" placeholder=" جۆر" id="type" class="form-control">
                              </div>
                              </div></div>
                        <div class="row">
                         <div class="col-sm-6">
                         <div class="form-group">
                          <label class="control-label">جۆری بڕ</label>
                             <select class="form-control" id="type">
                                  <option value="admin" >ڕێژە</option>
                                  <option value="manager" selected>کاش</option>
      
                                </select>
                                 </div>
                                  </div>
                                  <div class="col-sm-6">
                                    <div class="form-group">
                                 <label class="control-label">بڕ</label>
                              <input type="location" name="persentage" placeholder="بڕ" id="persentage" class="form-control">
                                </div>
                                  </div>
                                   </div>
                                 </div></section>
                              </div></div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">لابردن</button>
              <input type="submit" class="btn btn-primary" name="" value="گۆرڕین" id="add_employ_btn">
      
              
            </div>
          </div>
        </div>
      </div>
   
