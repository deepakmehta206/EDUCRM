<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Paperless Admission Management System" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo base_url(); ?>assets/dashboard/img/icon.png" type="image/jpeg" sizes="">
  <title><?php echo $site_title; ?></title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower-components/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/style.css" type="text/css">
  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1039156356993959');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1039156356993959&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
</head>
<style>
  .otpbox {
    width: 32px;
    height: 32px;
    text-align: center;

    border: 1px solid #EB7B17;
    margin: 0 10px;
  }

  .otpbox:focus {
    box-shadow: 0px 2px 5px #efb480;
    -webkit-box-shadow: 0px 2px 5px #efb480;
    outline: none;
  }

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

<body>
  <div class="pageLoader">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
  </div>
  <div class="login-container">
    <div class="left">

      <div class="one">
        <!-- <img src="img/icon.png" alt="" class="icon"> -->
        <span class="iconh1">EDUWEGO+</span>
        <p class="tag-line">Paperless Admission Management System</p>
        <h4 class="iconh2">Power-up Your Admissions & Fees Management Easily</h4>
      </div>

      <div class="two">
        <img src="<?php echo base_url(); ?>assets/dashboard/img/up.png" alt="" class="up">
        <h5 class="uph">Upto 90% Increase in Admissions Lead Conversions</h5>
        <p class="upp">Respond faster to incoming leads, collaborate with team members, and share prospectus, fees details & applications forms quicker.</p>
      </div>

      <div class="three">
        <img src="<?php echo base_url(); ?>assets/dashboard/img/invest.svg" alt="" class="invest">
        <h5 class="investh">Upto 90x Improvement in Student and Associates Relations</h5>
        <p class="investp">360°-degree view of admission conversations fees, contacts, associates. Team members can access
          history of all customers and provide delightful support.</p>
      </div>

      <div class="four">
        <img src="<?php echo base_url(); ?>assets/dashboard/img/down.png" alt="" class="down">
        <h5 class="downh">90% Reduction in Fees & Support Engine</h5>
        <p class="downp">Now reduce your burden of fee collection with our fee Management and online receipt features with dyanamic calculation features.</p>
      </div>

    </div>
    <div class="right">
      <center><img src="<?php echo base_url(); ?>assets/dashboard/img/loginlogo.png" width="120%" alt="" class="brand"></center>
      <hr>
      <div class="head">
        <center>
          <h3 class="brandh">
            Welcome Back Admin<br>Login to <span class="b-name">Eduwego+</span>
          </h3>
        </center>

      </div>

      <div class="alert alert-danger alert-dismissible d-none">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-times-circle" style='font-size:20px'></i>
        <span class='error-msg'></span>
      </div>

      <div class="alert alert-success alert-dismissible d-none">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="fa fa-check-circle" style='font-size:20px'></i> <span class='success-msg'></span>
      </div>

      <form id="instituteLogin">
        Email Id <span class="ast" style="color:red;"> * </span>
        <br>
        <input type="eamil" name="email" placeholder="Email Address" class="Email_Input" placeholder="Enter your Email Id" required>

        Password <span class="ast" style="color:red;"> * </span>
        <br>
        <input type="password" name="password" class="Email_Input" id="password" placeholder="Enter your password" required>

        <center>
          <input type="hidden" value="institute" name="login_type" />
          <input type="submit" value="Login" class="login">
          <i class="fa fa-spinner fa-spin d-none" style="font-size:24px"></i>
          <br>
          <a id="forgot_Password">
            <h3 class="forgot">Forgot Password?</h3>
          </a>
        </center>
      </form>

      <div class="brand-info">
        <p>Not an existing Client? <a href="<?= base_url(); ?>signup">Schedule a Demo</a>.</p>
        <p>Privacy Policy | Terms of Use</p>
        <div class="social-icons">
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="https://twitter.com/eduwego"><i class="fa fa-twitter"></i></a>
          <a href="https://www.facebook.com/eduwego"><i class="fa fa-facebook"></i></a>
          <a href="https://www.youtube.com/channel/UCp51eKXrpaozytRzbPY-aig"><i class="fa fa-youtube"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <p>© ZEQOON TECHNOLOGY PRIVATE LIMITED.</p>
      </div>
    </div>
  </div>

  <div class="modal Modal_" id="ForgetPassword">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-body">
          <button type="button" class="close forgotClose" data-dismiss="modal">&times;</button>
          <div class="frgt_Padd">
            <div class="row inner-row-ryt-1">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center Login_Ryt_text _mobileFra">
                <img class="nextynFavLogo" src="<?php echo base_url(); ?>assets/dashboard/img/loginlogo.png">
                <p class="" style="margin-bottom: 10px">Reset Password</p>
                <div id="validation-errorF"></div>
                <div class="show"></div>
              </div>
            </div>

            <div class="alert alert-danger email-danger alert-dismissible d-none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-times-circle" style='font-size:20px'></i>
              <span class='error-msg'></span>
            </div>

            <div class="alert alert-success email-success alert-dismissible d-none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-check-circle" style='font-size:20px'></i> <span class='success-msg'></span>
            </div>

            <form id="resetPassword" method="post" action="institute/institute_forgot_password">
              <div class="row justify-content-center">
                <div class="col-12 col-md-11 col-lg-10 text-center Login_Email">
                  <input type="email" name="email" placeholder="Registered Email Address" class="Email_Input" required="">
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-6" style="margin-top: 30px">
                  <input type="submit" value="RESET PASSWORD" class="Login_btn_Input">

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal Modal_" id="OTPModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-body">
          <button type="button" class="close forgotClose" data-dismiss="modal">&times;</button>
          <div class="frgt_Padd">
            <div class="row inner-row-ryt-1">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center Login_Ryt_text _mobileFra">
                <img class="nextynFavLogo" src="<?php echo base_url(); ?>assets/dashboard/img/loginlogo.png">
                <p class="" style="margin-bottom: 10px">2 Step Verification <br> Eenter OTP Sent to your Mobile & Email</p>
                <div id="validation-errorF"></div>
                <div class="show"></div>
              </div>
            </div>

            <div class="alert alert-danger email-danger alert-dismissible d-none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-times-circle" style='font-size:20px'></i>
              <span class='error-msg'></span>
            </div>

            <div class="alert alert-success email-success alert-dismissible d-none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <i class="fa fa-check-circle" style='font-size:20px'></i> <span class='success-msg'></span>
            </div>

            <form id="OtpForm">
              <div class="row justify-content-center">
                <div class="col-12 col-md-11 col-lg-10 text-center Login_Email">
                  <!-- <input type="number" name="otp" placeholder="Enter Your OTP" class="Email_Input" required=""> -->
                  <input id='inputOtp1' name='inputOtp1' class="otpbox" type='text' maxLength="1" autocomplete="off" />
                  <input id='inputOtp2' name='inputOtp2' class="otpbox" type='text' maxLength="1" autocomplete="off" />
                  <input id='inputOtp3' name='inputOtp3' class="otpbox" type='text' maxLength="1" autocomplete="off" />
                  <input id='inputOtp4' name='inputOtp4' class="otpbox" type='text' maxLength="1" autocomplete="off" />
                  <input id='inputOtp5' name='inputOtp5' class="otpbox" type='text' maxLength="1" autocomplete="off" />
                  <input id='inputOtp6' name='inputOtp6' class="otpbox" type='text' maxLength="1" autocomplete="off" />
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-6" style="margin-top: 30px">
                  <input type="hidden" value="institute" name="login_type" />
                  <input type="submit" value="SUBMIT" class="Login_btn_Input">
                  <i class="fa fa-spinner fa-spin d-none" style="font-size:24px"></i>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="<?php echo base_url(); ?>assets/dashboard/libs/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/dashboard/libs/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/dashboard/libs/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- <script>
    $('#instituteLogin').submit(function(event){
       event.preventDefault();
       var data   = $(this).serialize();
    
       $.ajax({
         type: 'POST',
         url: '<?php echo base_url('institute/instituteLogin'); ?>',
         data: data,
         beforeSend: function(){
          $('.fa-spin').removeClass('d-none');
         },
         success: function(data){
          $('.fa-spin').addClass('d-none');
          var data = JSON.parse(data);
          var status = data.status;

          if(status == true)
          {
            $(".alert-success").removeClass('d-none');
            $(".success-msg").html(data.message);
            setTimeout(function(){
                window.location.href = '<?= base_url(); ?>institute/dashboard';
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

</script> -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
     $('.pageLoader').show();
    $('.pageLoader').fadeOut('slow');
    const inputs = ["inputOtp1", "inputOtp2", "inputOtp3", "inputOtp4", "inputOtp5", "inputOtp6"];

    inputs.map((id) => {
      const input = document.getElementById(id);
      addListener(input);
    });

    function addListener(input) {
      input.addEventListener("keyup", () => {
        const code = parseInt(input.value);
        if (code >= 0 && code <= 9) {
          const n = input.nextElementSibling;
          if (n) n.focus();
        } else {
          input.value = "";
        }

        const key = event.key; // const {key} = event; ES6+
        if (key === "Backspace" || key === "Delete") {
          const prev = input.previousElementSibling;
          if (prev) prev.focus();
        }
      });
    }
    // $("#OTPModal").modal('show');
    $("#OtpForm").submit(function(e) {
      e.preventDefault();
      if ($('#inputOtp1').val() == "" || $('#inputOtp2').val() == "" || $('#inputOtp3').val() == "" || $('#inputOtp4').val() == "" || $('#inputOtp5').val() == "" || $('#inputOtp6').val() == "") {
        Swal.fire({
          title: "Required!",
          text: "Please enter all the fields of otp.",
          icon: "error"
        })
        return;
      }
      $('.pageLoader').show();
      $.ajax({
        type: 'POST',
        url: '<?= base_url('institute/verify_otp'); ?>',
        data: $(this).serialize(),
        beforeSend: function() {
          $('.fa-spin').removeClass('d-none');
        },
        success: function(data) {
          $('.pageLoader').fadeOut();
          $('.fa-spin').addClass('d-none');
          var data = JSON.parse(data);
          var status = data.status;
          if (status == true) {
            $("#OTPModal").modal('hide');
            $(".alert-success").removeClass('d-none');
            $(".success-msg").html(data.message);
            setTimeout(function() {
              window.location.href = '<?= base_url(); ?>institute/dashboard';
            }, 4000);
          } else if (status == false) {
            $(".alert-danger").removeClass('d-none');
            $(".error-msg").html(data.errormessage);
            setTimeout(function() {
              $(".alert-danger").addClass('d-none');
              $("#OTPModal").modal('hide');
            }, 4000);
          }
        }
      });
    });
  </script>

  <script>
    $('#instituteLogin').submit(function(event) {
      event.preventDefault();
      $('.pageLoader').show();
      var data = $(this).serialize();
      var login = "<?= $loginType; ?>";
      if (login == "mobile") {
        var redirect_url = '<?= base_url(); ?>mleads';
      } else if (login == "desktop") {
        var redirect_url = '<?= base_url(); ?>institute/dashboard';
      }
      $('#inputOtp1').val('');
      $('#inputOtp2').val('');
      $('#inputOtp3').val('');
      $('#inputOtp4').val('');
      $('#inputOtp5').val('');
      $('#inputOtp6').val('');
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url('institute/userAuth'); ?>',
        data: data,
        beforeSend: function() {
          $('.fa-spin').removeClass('d-none');
        },
        success: function(data) {
          $('.pageLoader').fadeOut();
          $('.fa-spin').addClass('d-none');
          var data = JSON.parse(data);
          var status = data.status;

          if (status == true) {

            $("#OTPModal").modal('show');
            $("#inputOtp1").focus();
          } else if (status == false) {
            $(".alert-danger").removeClass('d-none');
            $(".error-msg").html(data.errormessage);
            setTimeout(function() {
              $(".alert-danger").addClass('d-none');
            }, 4000);
          }

        }
      });

    });
  </script>

  <script>
    $('#resetPassword').submit(function(event) {
      event.preventDefault();
      var data = $(this).serialize();
      var action = $(this).attr('action');
      var method = $(this).attr('method');
      $.ajax({
        type: method,
        url: action,
        data: data,
        beforeSend: function() {
          $(".Login_btn_Input").val("Please Wait...");
        },
        success: function(data) {
          $(".Login_btn_Input").val("RESET PASSWORD");
          var data = JSON.parse(data);
          var status = data.status;

          if (status == true) {
            $(".email-success").removeClass('d-none');
            $(".email-success .success-msg").html(data.message);
            setTimeout(function() {
              $(".email-success").addClass('d-none');
              $('#ForgetPassword').modal('hide');
            }, 4000);
          } else if (status == false) {
            $(".email-danger").removeClass('d-none');
            $(".email-danger .error-msg").html(data.message);
            setTimeout(function() {
              $(".email-danger").addClass('d-none');
            }, 4000);
          }
        }
      });

    });

    $(document).on('click', '#forgot_Password', function() {
      $('#ForgetPassword').modal('show');
    })

    var getHeight = $('.Login_Ryt').innerHeight();
    $('.imgRad').css('height', getHeight + 'px');
  </script>

</body>

</html>