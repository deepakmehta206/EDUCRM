<style>
    .pageLoader {
        position: fixed;
        z-index: 999999;
        background: #ffffff6e;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* opacity: 0.5; */
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center
    }

    .pageLoader .dot {
        position: relative;
        width: 22px;
        height: 22px;
        margin: 8px;
        border-radius: 50%
    }

    .pageLoader .dot::before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background: inherit;
        border-radius: inherit;
        -webkit-animation: wave 2s ease infinite;
        animation: wave 2s ease infinite
    }

    .pageLoader .dot:nth-child(1) {
        background: #D36E15
    }

    .pageLoader .dot:nth-child(1)::before {
        -webkit-animation-delay: .2s;
        animation-delay: .2s
    }

    .pageLoader .dot:nth-child(2) {
        background: #EB7A17
    }

    .pageLoader .dot:nth-child(2)::before {
        -webkit-animation-delay: .4s;
        animation-delay: .4s
    }

    .pageLoader .dot:nth-child(3) {
        background: #EF9545
    }

    .pageLoader .dot:nth-child(3)::before {
        -webkit-animation-delay: .6s;
        animation-delay: .6s
    }

    .pageLoader .dot:nth-child(4) {
        background: #F5BD8B
    }

    .pageLoader .dot:nth-child(4)::before {
        -webkit-animation-delay: .8s;
        animation-delay: .8s
    }

    .pageLoader .dot:nth-child(5) {
        background: #F8D1AE
    }

    .pageLoader .dot:nth-child(5)::before {
        -webkit-animation-delay: 1s;
        animation-delay: 1s
    }
</style>
<div class="pageLoader">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
</div>
<div id="content" class="flex ">
    <!-- ############ Main START-->
    <div class="page-container" id="page-container">

        <div class="title-header">
            <div class="d-flex justify-content-between">
                <span>
                    <h3 class="mb-0 pull-left" style="color:white"><i class="fa fa-gear"></i> INSTITUTE PROFILE</h3>
                </span>
            </div>

            <div class="padding">

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="bgwhite profileMainDiv">
                            <!-- <form method="POST" id="AdminAddNewManager" class="_formSubmit" action="<?php //echo base_url(); 
                                                                                                            ?>institute/update_institute_profile" enctype="multipart/form-data"> -->
                            <form id="AdminAddNewManager">
                                <!-- <div class="card">
                                    <div class="card-body"> -->

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Upload Logo:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- <span class="colon">:</span> -->
                                        <input onchange="readURL(this);" type="file" name="image" id="fileUpload">
                                        <input type="hidden" name="old_logo" value="<?= $_SESSION['institute_logo']; ?>" />
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="ml-3">
                                            <img class="width100Per" id="blah" src="<?php if (isset($_SESSION['institute_logo']) && $_SESSION['institute_logo'] != NULL && $_SESSION['institute_logo'] != "") {
                                                                                        echo "../uploads/" . $_SESSION['institute_logo'];
                                                                                    } else {
                                                                                        echo base_url() . 'assets/dashboard/img/profileimg.png';
                                                                                    } ?>">
                                        </div>

                                    </div>




                                    <div class="col-lg-2">
                                        <label for="">Upload Signature:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- <span class="colon">:</span> -->
                                        <input onchange="readSigURL(this);" type="file" name="sig" id="fileupload1">
                                        <input type="hidden" name="old_sig" value="<?= $_SESSION['institute_sig']; ?>" />
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="ml-3">
                                            <img class="width100Per" id="sig" src="<?php if (isset($_SESSION['institute_sig']) && $_SESSION['institute_sig'] != NULL && $_SESSION['institute_sig'] != "") {
                                                                                        echo "../uploads/" . $_SESSION['institute_sig'];
                                                                                    } else {
                                                                                        echo base_url() . 'assets/dashboard/img/profileimg.png';
                                                                                    } ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Upload Profile:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- <span class="colon">:</span> -->
                                        <input onchange="readURLProfile(this);" type="file" name="profileImage" id="fileUpload3">
                                        <input type="hidden" name="old_ProfileImage" value="<?= $_SESSION['profileImage']; ?>" />
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="ml-3">
                                            <img class="width100Per" id="blahProfile" src="<?php if (isset($_SESSION['profileImage']) && $_SESSION['profileImage'] != NULL && $_SESSION['profileImage'] != "") {
                                                                                                echo "../uploads/" . $_SESSION['profileImage'];
                                                                                            } else {
                                                                                                echo base_url() . 'assets/dashboard/img/profileimg.png';
                                                                                            } ?>">
                                        </div>

                                    </div>




                                    <div class="col-lg-2">
                                        <label for="">Upload Landing Profile:</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <!-- <span class="colon">:</span> -->
                                        <input onchange="readSigURLLanding(this);" type="file" name="landingProfile" id="fileupload4">
                                        <input type="hidden" name="old_LandingProfile" value="<?= $_SESSION['landingProfile']; ?>" />
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="ml-3">
                                            <img class="width100Per" id="atlLandingPro" src="<?php if (isset($_SESSION['landingProfile']) && $_SESSION['landingProfile'] != NULL && $_SESSION['landingProfile'] != "") {
                                                                                                    echo "../uploads/" . $_SESSION['landingProfile'];
                                                                                                } else {
                                                                                                    echo base_url() . 'assets/dashboard/img/profileimg.png';
                                                                                                } ?>">
                                        </div>
                                    </div>
                                </div>




                                <!-- </div>
                                </div> -->
                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Institute Name<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="hidden" name="institute_id" value="<?php echo $_SESSION['institute_id']; ?>">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="institute_name" required placeholder="Institute Name" value="<?php echo $_SESSION['name']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Mobile Number<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="hidden" name="institute_id" value="<?php echo $_SESSION['institute_id']; ?>">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="institute_name" required placeholder="Institute Name" value="<?php echo $_SESSION['name']; ?>" autocomplete="new">
                                    </div>
                                </div>


                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Email<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="email" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="email" required placeholder="Isntituteemail@gmail.com" value="<?php echo $_SESSION['email']; ?>" disabled autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Landline No.<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="landline_no" value="<?php echo $_SESSION['landline']; ?>" autocomplete="new">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Payment Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="payment_link" value="<?php echo $_SESSION['payment_link']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Refund Policy Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="refund_link" value="<?php echo $_SESSION['refund_link']; ?>" autocomplete="new">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Facebook Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="facebook_link" value="<?php echo $_SESSION['facebook_link']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Google Business Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="google_business_link" value="<?php echo $_SESSION['google_business_link']; ?>" autocomplete="new">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Brochure Download Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="brochure_link" value="<?php echo $_SESSION['brochure_link']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Twitter Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="twitter_link" value="<?php echo $_SESSION['twitter_link']; ?>" autocomplete="new">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Instagram Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="instagram_link" value="<?php echo $_SESSION['instagram_link']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Youtube Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="youtube_link" value="<?php echo $_SESSION['youtube_link']; ?>" autocomplete="new">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Subscription Expiry Date<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" value="<?= date('d-M-Y', strtotime($_SESSION['institute_expiry_date'])); ?>" autocomplete="new" disabled />
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Max No. of Leads<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" value="" autocomplete="new" disabled />
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Admission Fee<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="admsn_fee" value="<?php echo $_SESSION['admission_fee']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Institute Addres<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <textarea class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="address" required><?php echo $_SESSION['institute_address']; ?></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">State<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="state" value="<?php echo $_SESSION['state']; ?>" autocomplete="new">
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">City<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="text" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" name="city" value="<?php echo $_SESSION['city']; ?>" autocomplete="new">
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-lg-2">
                                        <label for="">Admission Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" value="<?php echo $_SESSION['admission_link']; ?>" autocomplete="new" disabled>
                                    </div>
                                    <div class="col-lg-1"></div>
                                    <div class="col-lg-2">
                                        <label for="">Enquiry Link<span class="text-danger">*</span> :</label>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="website" class="form-control _fs14_ frmBg _drkclr_ _fntwss_" value="<?php echo $_SESSION['enquiry_link']; ?>" autocomplete="new" disabled>
                                    </div>
                                </div>

                                <!-- <div class="row mt-3">
                                    <div class="col-12"> -->
                                <div class="form-group row">
                                    <div class="col-12 d-flex justify-content-between">
                                        <button type="button" class="btn btn-default btn-responsive m-t-15 w-sm mb-1  _fwg500_ _fs14_  btn_hvr_effct nwFntSt" style="float: left">Back</button>
                                        <button type="submit" class=" svebtn btn-responsive m-t-15 w-sm mb-1 _wtClr_ _fwg500_ _fs14_  btn_hvr_effct nwFntSt" style="float:right">Save</button>
                                    </div>
                                </div>
                                <!-- </div>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ############ Main END-->
    </div>

    <div class="modal" id="profile_picture">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal body -->
                <div class="modal-body posRela">
                    <!-- Resize image -->
                    <div>
                        <button type="button" class="close" data-dismiss="modal"><i class="la la-times"></i></button>
                    </div>
                    <div class="m-t-25 m-b-15">
                        <h4 class="_fs16_ _greyClr_ _fwg500_">Uploading your photo…</h4>
                    </div>

                    <section id="sectionResize">
                        <div class="image-resize" id="imageResize"></div>
                        <div class="text-center m-t-15">
                            <button class="btn btn-responsive m-t-15 w-sm mb-1 _wtClr_ _fwg500_ _fs14_ _addMngr_ btn_hvr_effct nwFntSt" id="crop"><span class='fa fa-crop'></span>Save</button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.pageLoader').show();
        $('.pageLoader').fadeOut('slow');

        function readURLProfile(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#blahProfile').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        function readSigURLLanding(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#atlLandingPro').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
        // <!-- <form method="POST" id="AdminAddNewManager" class="_formSubmit" action="<?php //echo base_url(); 
                                                                                        ?>institute/update_institute_profile" enctype="multipart/form-data"> -->
        $("#AdminAddNewManager").submit(function(e) {
            e.preventDefault();
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
                    $('.pageLoader').show();
                    $.ajax({
                        type: 'POST',
                        url: '<?= base_url('institute/update_institute_profile'); ?>',
                        data: $(this).serialize(),
                        success: function(data) {
                            console.log(data);
                            $('.pageLoader').fadeOut();
                            var data = JSON.parse(data);
                            if (data.status == true) {
                                Swal.fire({
                                    title: "UPDATED!",
                                    text: "Profile updated Successfully.",
                                    icon: "success"
                                }).then((res) => {
                                    window.location.reload();
                                });
                            } else if (data.status == false) {
                                Swal.fire({
                                    title: "ERROR!",
                                    text: "Something went wrong. Please try again later.",
                                    icon: "error"
                                }).then((res) => {
                                    window.location.reload();
                                });
                            }
                        }
                    });
                }
            })


        });
    </script>