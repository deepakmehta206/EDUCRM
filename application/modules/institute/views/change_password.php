<style type="text/css">
   /*.cursesActive, .cursesActive:hover{
   color: #8A162B;
   }*/
   .cursesActive ._sdf_{
   color: #8A162B !important;
   }
</style>
<div id="content" class="flex ">
   <div class="page-container" id="page-container">
      <div class="padding">
         <div class="page-title p-b-40 m-b-20 pt20">
            <h2 class="mb-0 nwFntSt _blckClr_ _fwg500_ _fs16_ pull-left">Change Password</h2>
         </div>
      </div>

      <div class="padding">
         <div class="row justify-content-center">
           <div class="col-12 col-md-6">
            <div class="alert alert-danger email-danger alert-dismissible d-none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-times-circle" style='font-size:20px'></i> 
              <span class='error-msg'></span>
          </div>

          <div class="alert alert-success email-success alert-dismissible d-none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-check-circle" style='font-size:20px'></i> <span class='success-msg'></span>
          </div>

            <form id="changePassword">
              <div style="margin-top: 30px;">
                <label for="" class="col-form-label _fs14_ _fwg500_ _greyClr_ text-left">Current Password*</label>
                <input id="currntPassword" type="password" name="currentPassword" class="form-control makeReqin"  required>
                <span class="text-danger"><?=form_error('currentPassword'); ?></span>
              </div>

              <div style="margin-top: 30px;">
                <label for="" class="col-form-label _fs14_ _fwg500_ _greyClr_ text-left">New Password*</label>
                <input id="newPassword" type="password" name="newPassword" class="form-control makeReqin"  required>
                <span class="text-danger"><?=form_error('newPassword'); ?></span>
              </div>

              <div style="margin-top: 30px">
                <label for="" class="col-form-label _fs14_ _fwg500_ _greyClr_ text-left">Verify Password*</label>
                <input id="verifyPassword" type="password" name="verifyPassword" class="form-control makeReqin"  required>
                <span class="text-danger"><?=form_error('verifyPassword'); ?></span>
              </div>

              <div class="text-center" style="margin-top: 30px;">
                <span class="loadingMyprofile" style="top: 2px; right: -7%"><img src="<?php echo base_url(); ?>assets/dashboard/img/loading7.gif"></span>
                  <button type="submit" class="svebtn"  style="float:right">Save</button>
              </div>
            </form>
           </div>
         </div>
      </div>
   </div>
</div>

<!--<============
   Delete Popup End
   ============>-->
<script type="text/javascript"></script>

<script>
  $("#changePassword").on('submit',function(e){
    e.preventDefault();
    $.ajax({
      type:'POST',
      url : '<?=base_url(); ?>institute/changes_pass',
      data : $(this).serialize(),
      beforeSend : function(){
        $(".svebtn").html('Please Wait...');
        $(".svebtn").attr('disabled');
      },
      success : function(res){
        $(".svebtn").html('Save');
        $(".svebtn").removeAttr('disabled');
        var data = JSON.parse(res);
        var status = data.status;
        if(status == true)
        {
          $(".alert-success").removeClass('d-none');
          $(".success-msg").html(data.message);
          setTimeout(function(){
              $(".alert-success").addClass('d-none');
          },4000);
        } else if(status == false){
          $(".alert-danger").removeClass('d-none');
          $(".error-msg").html(data.errormessage);
          setTimeout(function(){
              $(".alert-danger").addClass('d-none');
          },4000);
          
        }       
      }
    });
  });
</script>