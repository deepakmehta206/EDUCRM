<style type="text/css">
    /*.studentActive, .studentActive:hover{
    background: rgba(91, 193, 70, 0.1);
    border-color: #5BC146;
    color: #8A162B;
  }*/
    .studentActive ._sdf_ {
        color: #8A0A28 !important;
    }

    .imgcontent {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 180px;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    .smsActive ._sdf_ {
        color: #8A162B !important;
    }

    .smsselectbox {
        background: #FFFFFF;
        border: 1px solid #ECECEC;
        box-sizing: border-box;
        border-radius: 2px;
        width: 100%;
        height: 30px;
        color: #888888;
    }

    .title-header {
        background: #8E294F;
        height: 70px;
        padding: 20px;

    }

    .action-con i {
        cursor: pointer;
    }

    .notice-list li {
        display: flex;
        border: 1px solid #ccc;
        padding: 7px;
        margin-bottom: 5px;
    }

    .notice-list li .notice-sl {
        min-width: 25px;
        height: 25px;
        padding: 3px;
        background: #8b152b;
        color: white;
        text-align: center;
        margin-right: 12px;
    }

    .notice-type {
        color: #8b152b;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<div id="content" class="flex ">
    <div class="title-header">
        <div class="">
            <span>
                <h3 class="mb-0 pull-left" style="color:white"><i class="fa fa-check-square-o"></i> Notifications</h3>
            </span>
        </div>
    </div>

    <div class="page-container" id="page-container">

        <div class="padding">
            <div class="card">
                <div class="card-header">
                    Enquiry
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                            <th class="text-center">SL#</th>
                            <th class="text-center">Notification</th>
                            <th class="text-center">Date</th>
                        </tr>
                        <?php
                        if (!empty($notifications)) {
                            foreach ($notifications as $key => $notice) {
                        ?>
                                <tr>

                                    <td class="text-center"><?= ($key + 1); ?></td>
                                    <td class="text-center"><?php echo $notice->msg ?></td>
                                    <td class="text-center"><?php echo date('d-M-Y', strtotime($notice->created_at)) ?></td>


                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="3" class="text-center">No Notification Found !</td>
                            </tr>

                        <?php }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="padding">
            <div class="card">
                <div class="card-header">
                    Task Reminders
                </div>
                <div class="card">
                    <table>
                        <tr>
                            <th class="text-center">SL#</th>
                            <th class="text-center">Taks</th>
                            <th class="text-center">Assigned Date</th>
                            <th class="text-center">Assigned Time</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        <?php
                        if (!empty($reminder)) {
                            foreach ($reminder as $key => $re) {
                        ?>
                                <tr>

                                    <td class="text-center"><?= ($key + 1); ?></td>
                                    <td class="text-center"><?= $re->reminder_content ?></td>
                                    <td class="text-center"><?php echo date('d-M-Y', strtotime($re->reminder_date)) ?></td>
                                    <td class="text-center"><?php echo date('H:i A', strtotime($re->reminder_time)) ?></td>
                                    <td class="text-center"><?php 
                                                            if ($re->statusId == 0) {
                                                                echo '<P class="text-danger">Pending</p>';
                                                            }elseif($re->statusId == 1){
                                                                echo '<P class="text-info">In-progress</p>';
                                                            }elseif($re->statusId == 2){
                                                                echo '<P class="text-warning">In-Hold</p>';
                                                            }elseif($re->statusId == 3){
                                                                echo '<P class="text-success">Completed</p>';
                                                            }

                                                            ?></td>
                                    <td class="text-center">
                                        <a href="javascript:void(0)" onclick="showModalBtn(<?php echo $re->reminder_id; ?>)">
                                            <i class="fa fa-pencil"></i>
                                        </a>

                                    </td>


                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="7" class="text-center">No Task Reminder Found !</td>
                            </tr>

                        <?php }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Task Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update-status">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4 form-group">
                            <label class="form-lable">Update Status <span class="colon">:</span></label>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="hidden" id="encId" name="encId">
                            <!-- <span class="colon">:</span> -->
                            <select name="updateStatus" id="updateStatus" class="form-select">
                                <option value="">--Select--</option>
                                <option value="1">In-Progress</option>
                                <option value="2">On-Hold</option>
                                <option value="3">Complete</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--------------------------------------------------------popup----------------------------------------- -->

<!--<============
      Delete Popup End
      ============>-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showModalBtn(e) {
        $('#encId').val(e);
        console.log(e)
        $("#myModal").modal('show');
    }


    $('#update-status').submit(function(e) {
        e.preventDefault();
        if ($('#updateStatus').val() == "") {
            Swal.fire({
                title: "Required!",
                text: "Please select the status!",
                icon: "info"
            })
            return;
        }
        Swal.fire({
            title: "Are you sure?",
            text: "You want update the status !",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Update it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url(); ?>institute/updatetaskstatus',
                    data: $(this).serialize(),
                    success: function(data) {
                        Swal.fire({
                            title: "Updated!",
                            text: "status update successfull.",
                            icon: "success"
                        }).then((res) => {
                            window.location.reload();
                        });

                    },
                    error: function(err) {

                    }
                });
            }
        });


    })


    $(".contacted_medium").on("change", function() {
        var medium = $(this).val();
        var lead_id = $(this).attr('lead_id');
        if (medium != "") {
            $.ajax({
                type: 'POST',
                url: '<?= base_url(); ?>institute/change_contacted_medium',
                data: {
                    medium: medium,
                    lead_id: lead_id
                },
                success: function(res) {
                    var data = JSON.parse(res);
                    if (data.status == false) {
                        vNotify.error({
                            text: data.errormessage
                        });
                        // $( ".error-message" ).remove();
                        // if(data.errormessage){
                        //   vNotify.error({text:data.errormessage, title:'Error!'});
                        // }
                        //  data1   = JSON.parse(data.message);
                        // $('form :input').each(function(){                          
                        //   var elementName = $(this).attr('name');        
                        //   var message = data1[elementName];
                        //   if(message){
                        //     var element = $('<span>' + message + '</span>')
                        //                   .attr({
                        //                       'class' : 'error-message'
                        //                   });
                        //     $(this).after(element);
                        //     $(element).fadeIn();
                        //   }
                        // }); 
                    }
                    if (data.status == true) {
                        vNotify.success({
                            text: data.message
                        });
                        $(".error-message").remove();
                    }
                },
                error: function(data) {
                    $('#validation-error').html(data.message);
                }

            });
        }
    });
</script>