<style type="text/css">
   /*.agentActive, .agentActive:hover{
   background: rgba(91, 193, 70, 0.1);
   border-color: #5BC146;
   color: #8A162B;
   }*/
 .instituteActive ._sdf_{
   color: #8A0A28 !important;
 }
 .appendicon
 {
  display: inline-block;
    background: green;
    color: white;
    border-radius: 100%;
    width: 20px;
 }
 .uplodimg[type=file]{
    padding-bottom: 27px;
    font-size: 11px;
 }

 .form-group input{
   background: #ddd;
 }
 </style>
<div id="content" class="flex ">
   <div class="page-container" id="page-container">
      <div class="padding">
         <div class="row">
            <div class="col-12 col-md-6">
               <h2 class="mb-0 nwFntSt _blckClr_ _fwg500_ _fs16_ pull-left">Institute List</h2>
            </div>
            <div class="col-12 col-md-6 text-right">
               <button class="btn _fs14_ _bggrn_ i-con-h-a Delete-bttn" onclick="deleteFunc()" id="multiDelete" style="display: none;"><i style="color: #fff" class="i-con i-con-trash"><i></i></i></button>
            </div>
         </div>
         <div class="table-responsive">
            <table id="myTable" class="table table-theme table-row v-middle responsive dataTable no-footer" role="grid" aria-describedby="clientTable_info">
               <a href="https://datatables.net/extensions/responsive/" target="_blank"></a>
               <thead>
                  <th><label class="checkboxcontainer">
                        <input type="checkbox" name="" class="pivileges" id="selectAll">
                        <span class="checkmark"></span>
                     </label> </th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">S.No.</span></th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Name</span></th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Email</span></th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Contact Number</span></th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Number of Students</span></th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Days Left</span></th>
                  <th><span class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Actions</span></th>
               </thead>
               <tbody id="tableBody">

                  <?php
                    $enq = $this->admin_model->getAllActiveInstitute();
                    for ($i=0; $i < count($enq); $i++) {                    
                  ?>
                  <tr>
                     <td>
                        <label class="checkboxcontainer">
                           <input type="checkbox" name="" value="<?php echo $enq[$i]->institute_id; ?>" class="pivileges singleInput">
                           <span class="checkmark"></span>
                        </label>
                     </td>
                     <td><div class="item-except _greyClr_ _fs14_"><?php echo $i + 1; ?></div></td>
                    <td><div class="item-except _greyClr_ _fs14_"><?php echo $enq[$i]->institute_name; ?></div></td>
                    <td><div class="item-except _greyClr_ _fs14_"><?php echo $enq[$i]->institute_email; ?></div></td>
                    <td><div class="item-except _greyClr_ _fs14_"><?php echo $enq[$i]->institute_mobile; ?></div></td>
                    <td>
                       <?php  
                       $inst_id = $enq[$i]->institute_id;
                       $students = $this->db->query("SELECT student_id FROM students WHERE institute_id = '".$inst_id."' AND student_status = 1 ")->result();
                       print_r(count($students));
                       ?>
                    </td>
                    <td>
                     <?php
                      $today = date("Y-m-d");
                      $now = time(); 
                      $expiry = strtotime($enq[$i]->institute_expiry_date);
                      $datediff = $expiry - $now;
                      if($datediff > 0)
                      {
                        echo round($datediff / (60 * 60 * 24));
                     } else{
                        echo "<span class='text-danger'>Expired</span>";
                     }
                      
                     ?>
                     
                    </td>
                    <td class="actionbtns">
                        <div class="btn-group">
                           <button type="button" onclick="viewInstitute('<?php echo $enq[$i]->institute_id; ?>')" class="btn _fs14_  bg-primary  view-institute"><i class="fa fa-eye"></i> View</button>
                           <button type="button" onclick="editInstitute('<?php echo $enq[$i]->institute_id; ?>')" class="btn _fs14_  _bgyllw_ i-con-h-a text-white edit-bttn"><i class="i-con i-con-edit"></i>Edit</button>
                           <a href="<?=base_url(); ?>admin/banner/<?=$enq[$i]->institute_id; ?>" type="button" class="btn _fs14_ bg-success i-con-h-a text-white edit-bttn"><i class="fa fa-image"></i> Banners</a>
                           <button type="button" onclick="deleteFunc('<?php echo $enq[$i]->institute_id; ?>')" class="btn _fs14_ _bggrn_ i-con-h-a text-white Delete-bttn"><i class="i-con i-con-trash"><i></i></i></button>
                        </div>
                     </td>
                  </tr>

                  <?php
                    }
                    ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="modal Modal_" id="opnpopup">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header ">
            <h5 class="modal-title _fwg500_ _fs16_ nwFntSt _blckClr_">Edit Institute</h5>
            <a class="i-con-h-a" data-dismiss="modal"><i class="mr-2 i-con i-con-close"></i></a>
         </div>
         <div class="modal-body">
            <form role="form" class="_formSubmit" id="form" method="post" action="<?php echo base_url('admin/add_institute'); ?>">
               <div class="row">

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Institute Logo<span class="validation-color">*</span></label>
                    <input id="logo" type="file" name="logo" class="form-control">
                    <input id="old_logo" type="hidden" name="old_logo" class="form-control">
                    <div class="mt-2">
                       <img class="logo-img" width="120px"/>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Institute Signature<span class="validation-color">*</span></label>
                    <input id="sig" type="file" name="sig" class="form-control">
                    <input id="old_sig" type="hidden" name="old_sig" class="form-control">
                    <div class="mt-2">
                       <img class="sig-img" width="120px"/>
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Institute Name<span class="validation-color">*</span></label>
                    <input id="name" type="text" name="name" class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Admin Name<span class="validation-color">*</span></label>
                    <input id="admin" type="text" name="admin_name" class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Affiliations<span class="validation-color">*</span></label>
                    <input id="affiliation" type="text" name="affiliation" class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Contact Number<span class="validation-color">*</span></label>
                    <input id="mobile" type="text" name="mobile" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Landline No.<span class="validation-color">*</span></label>
                    <input id="landline" type="text" name="landline" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Email<span class="validation-color">*</span></label>
                    <input id="email" type="email" name="email" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Number of Students<span class="validation-color">*</span></label>
                    <input id="allowed_student" type="text" name="allowed_student" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Max no. of leads<span class="validation-color">*</span></label>
                    <input id="leads_allowed" type="text" name="leads_allowed" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Max no. of Employees<span class="validation-color">*</span></label>
                    <input id="emp_allowed" type="text" name="emp_allowed" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Message Api Username*<span class="validation-color">*</span></label>
                    <input id="msg_api_username" type="text" name="msg_api_username" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Message Api Password<span class="validation-color">*</span></label>
                    <input id="msg_api_password" type="text" name="msg_api_password" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Website Link<span class="validation-color"></span></label>
                    <input id="website" type="website" name="website" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Subdomain Name<span class="validation-color">*</span></label>
                    <input id="subdomain" type="text" name="subdomain" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Payment Gateway Link<span class="validation-color"></span></label>
                    <input type="website" name="payment_api_key" class="form-control" id="payment_gateway">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Facebook Page Link</label>
                    <input id="facebook" type="website" name="facebook" class="form-control" />
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Instagram Link</label>
                    <input id="instagram" type="website" name="instagram" class="form-control" />
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Youtube Link</label>
                    <input id="youtube" type="website" name="youtube" class="form-control" />
                  </div>
                        
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Google Business Link</label>
                    <input id="google" type="website" name="google_business" class="form-control" />
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Brochure Download Link</label>
                    <input id="brochure" type="website" name="brochure_link" class="form-control" />
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Refund Policy Link</label>
                    <input id="refund" type="website" name="refund_link" class="form-control" />
                  </div>
                  
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Registration Form Html File Name<span class="validation-color">*</span></label>
                    <input id="html_file_name" type="text" name="html_file_name" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Registration Form Html File Name Editable<span class="validation-color">*</span></label>
                    <input id="html_file_name_editable" type="text" name="html_file_name_editable" class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Expiry Date<span class="validation-color">*</span></label>
                    <input id="expiry_date" type="text" name="expiry_date" class="form-control date examDate">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">City<span class="validation-color">*</span></label>
                    <input id="city" type="text" name="city" class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">State<span class="validation-color">*</span></label>
                    <input id="state" type="text" name="state" class="form-control">
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Address<span class="validation-color">*</span></label>
                     <textarea id="Address"  name="address" class="form-control _fs14_ frmBg _drkclr_ _fntwss_ " required style="height: 60px;"></textarea>
                  </div>

                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Bank Name<span class="validation-color">*</span></label>
                    <input type="text" name="bank_name" class="form-control bank_name">
                  </div>
               
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Branch Name<span class="validation-color">*</span></label>
                    <input type="text" name="branch_name" class="form-control branch_name">
                  </div>
               
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">A/c No.<span class="validation-color">*</span></label>
                    <input type="text" name="account_no" class="form-control account_no">
                  </div>
               
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">IFSC Code<span class="validation-color">*</span></label>
                    <input type="text" name="ifsc_code" class="form-control ifsc_code">
                  </div>
               
                  <div class="form-group col-md-6">
                     <label class="text-muted _blckClr_ _fs14_ _fwg500_ nwFntSt">Beneficiary Name<span class="validation-color">*</span></label>
                    <input type="text" name="beneficiary" class="form-control beneficiary">
                  </div>

                  <div class="col-12">
                     <h5>Sidebar Menus</h5>
                  </div>
                  <div class="col-md-2">
                     <input type="checkbox" name="dashboard" class="dashboard"> <span>Dashboard</span> 
                  </div>
                  <div class="col-md-2">
                     <input type="checkbox" name="inbox" class="inbox"> <span>Inbox</span> 
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="student_search" class="student_search"> <span>Student Search</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="leads" class="leads"> <span>Online Leads</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="students" class="students"> <span>Students</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="admission" class="admission"> <span>Admission</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="associate" class="associate"> <span>Associate</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="assos_req" class="assos_req"> <span>Associate Requests</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="institutes" class="institutes"> <span>Our Institutes</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="fee_mgmt" class="fee_mgmt"> <span>Fee management</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="courses" class="courses"> <span>Courses</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="stream" class="stream"> <span>Stream</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="staff" class="staff"> <span>Staffs & Faculties</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="vendor" class="vendor"> <span>Vendors</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="reports" class="reports"> <span>Reports</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="sms" class="sms"> <span>SMS/Email</span>
                  </div>
                  <div class="col-md-2">
                      <input type="checkbox" name="social_media" class="social_media"> <span>Social Media</span>
                  </div>
                  
                  <div class="col-sm-12">
                     <div class="box-footer">
                        <button type="submit" id="submit" class="btn btn-primary">Update</button>
                        <input type="hidden" name="institute_id" value="" id="institute_id">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--------------------------------------Payment popup---------------------------------------->

<!-- / .modal -->
<!--<============
   Delete Popup 
     ============>-->

<div class="modal Modal_" id="DeleteClientPopup">
   <div class="modal-dialog Modal-width_580">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-body">
            <button type="button" class="close Popup_Delete_icn" data-dismiss="modal">
            <a class="i-con-h-a"><i class="mr-2 i-con i-con-close"></i></a>
            </button>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 popup_bg_color padding-16">
               <div class="row">
                  <div class="col-12 Botm_brdr">
                     <h3 id="h3_Delete" class="_fs16_">
                        <a class="i-con-h-a _mhrnclr_">
                        <i class="mr-2 i-con i-con-bell"><i></i></i>
                        </a>
                        Delete Institute.
                     </h3>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 m-t-20">
                     <p id="p_action" class="_fs14_ _greyClr_ _fwg300_ ">This action can not be undone. <br>Are you sure you want to delete institute from the dashboard?</p>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 text-right">
                     <form id="singleDeleteIdq" method="POST" action="<?php echo base_url('admin/deleteInstitute'); ?>">
                        <span data-dismiss="modal" class="btn btn-responsive NoStay-btn">No stay</span>
                        <input type="hidden" name="taluka_id" id="ehiddenid">
                        <button type="submit" class="btn btn-responsive YesDlt-btn">Yes Delete</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<============
   Delete Popup End
   ============>-->
<script>
  
   
</script>