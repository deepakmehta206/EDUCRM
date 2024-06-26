<!DOCTYPE html>
<html>
<head>
	<title>CNK GROUP OF INSTITUTIONS</title>
	<meta name="description" content="Online Admission Application Form - CNK GROUP OF INSTITUTIONS" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <!-- style -->
     
      <link rel="manifest" href="<?php echo base_url(); ?>assets/dashboard/favicon/manifest.json">
      <meta name="msapplication-TileColor" content="#ffffff">
      <meta name="msapplication-TileImage" content="assets/dashboard/favicon/ms-icon-144x144.png">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/libs/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/i-con.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/theme.css" type="text/css" />
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower-components/DataTables/DataTables/css/dataTables.bootstrap4.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bower-components/datepicker/dist/datepicker.min.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/style.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/util.css" type="text/css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dashboard/css/expert.css" type="text/css" />
      <style>
      <style>
      .error-message {position: absolute;font-size: 12px;color: red;left: 15px;}
      .box-shadows{
	       box-shadow: 0px 0px 11px rgba(0, 0, 0, 0.25);
	   }
	   .padding-10 {
			padding: 8px 3px!important;
			vertical-align: inherit!important;}
		.table-bordered td, .table-bordered th{
			border:1px solid #333!important;
			color: #000 !important}
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			  -webkit-appearance: none;
			  margin: 0;
		}
		.checkbox_enquiry .pivileges:checked ~ .checkmark_enquiry {
		    background: #ec2725!important;
		}
		
		.for_signature_img{
			height: 100%;
			width: 100%;
			/*background: #efefef;*/
			margin-bottom: 10px;
		}
	   ._nwcntn_ {
		    width: 270px;
		    border: 1px solid transparent;
		    border-radius: 4px;
		    z-index: 10000 !important;
		}
		._nwulmn_ {
		    width: 100% !important;
		    background: #FCFCFD;
		    padding: 10px 0 !important;
		}

		@media print {
		  footer {page-break-after: always;}
		}

		@page {
		    size: auto;
		    margin: 0;
		}

		@media only screen and (max-width: 414px){
			.form-group{
				margin-bottom: 0px;
			}
		}

		.fnt_red_clr{
			color: #ea1717e6;
		}

		.oxford_bg_clr{
			/*background: #13c290;*/
		}

		.oxford_text_clr{
			color: #04053d;
		}
		
		.srored-table .fnt_red_clr{
			color: #ea1717e6!important;
		}

		.main-con{
			border: 1px solid #09664c;
		}

		.clg_header{
			background: #09664c;
			padding: 12px;
		}
		.clg-heading h2{
			color: white;
		}
		.clg-heading p{
			font-size: 17px;
			color: white;
		}

		.app-no{
			border: 2px solid #09664c;
			padding: 12px;
			margin: 5px;
		}

		.courses{
			border: 2px solid #09664c;
			padding: 12px;
			margin: 5px;
		}

		.session-yr{
			text-align: center;
			align-items: center;
			margin-top: 30px;
		}

		.candidate-details{
			border: 2px solid #09664c;
		}

		@media only screen and (max-width: 768px)
		{
			.clg-heading h1,h3{
				text-align: center;
			}
		}
    </style>
</head>
<body>

<!-- Header section -->
<div class="container main-con">
	<form id="admisn-form" method="POST" action="?= base_url()?>institute/editAdmissionDetails" enctype="multipart/form-data">
		<div class="row clg_header">
			<div class="col-12 col-md-2 text-center">
				<div class="logo_main_">
					<img class="nextynFavLogo_" src="<?php echo base_url(); ?>assets/dashboard/img/cnk-logo.PNG">
				</div>
			</div>

			<div class="col-12 col-md-10 clg-heading">
				<center>
					<h2 class="oxford_text_clr fw-600">C.N.K. SCHOOL & COLLEGE OF NURSING<h2>
						<p>(Approved by: Govt. of Karnataka, Recognized by: INC & KNC, Affiliated to RGUHS / KSDNEB) #12, Cholanayakanahalli, RT Nagar Post, Hebbal, Bengaluru, Karnataka - 560032. Website: www.cnkcon.in / E-mail: admission@cnkcon.in</p>
				</center>
		    </div>
		</div>
		<center><h3 class="fs-30 oxford_text_clr fw-600">Application Form</h3></center>

		<div class="row">
			<div class="col-md-3">
				<div class="app-no">
					<center><h6 style="font-weight:bold">Application No:</h6></center>
				</div>
				<div class="courses">
					<center><h6 style="font-weight:bold">Courses</h6></center>
					<?php 
						$course = "{course_applied_for}";
					?>
					<input type="radio" name="course_applied_for" value="B.Sc. Nursing" class="pivileges singleInput"> Bsc. Nursing
					<br/>
					<input type="radio" name="course_applied_for" value="P.C.B.Sc. Nursing" class="pivileges singleInput"> P.B.B.Sc. Nursing
					<br/>
					<input type="radio" name="course_applied_for" value="GNM" class="pivileges singleInput"> GNM
				</div>
			</div>
			<div class="col-md-6">
				<div class="session-yr">
					<h3>Session : 20___20____</h3>
				</div>
			</div>
			<div class="col-md-3 text-right">
				<label class="_passport_img_main_" for="profileImage">
					<img src="<?php echo base_url(); ?>uploads/{student_photo}" id="profileImg" height="100%" width="100%">
					<input type="file" name="profileImage" id="profileImage" style="opacity:0"  value="<?php echo base_url(); ?>uploads/{student_photo}">
					<?php
					$photo = "{student_photo}";
					if($photo == "")
					{
						?>
							<p id="getText">Affix your Passport size photograph here</p>
						<?php
					}
					?>
				</label>
			</div>
		</div>

		<div class="container mt-3">

			<!-- form upper section -->
				<div class="row">
					<div class="col-12">
						<div class="candidate-details">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Name Of The Candidate*</label>
									</div>
									<div class="col-12 col-md-9">
										<input id="name" type="text" name="name" class="form-control makeReqin" value="{name}" required autocomplete="new">
									</div>
								</div>
							</div>	
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Gender</label>
									</div>
									<div class="col-12 col-md-9">
										<input id="sex" type="text" name="sex" class="form-control makeReqin" value="{sex}" required autocomplete="new">
										
									</div>
								</div>
							</div>	
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Father Name*</label>
									</div>
									<div class="col-12 col-md-9">
										<input id="father_mo_number" type="text" name="father_name" class="form-control makeReqin" value="{father_name}" required autocomplete="new">
									</div>
								</div>
							</div>
							
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-6">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Present Address*</label>
										<textarea class="permanent_address current_address" name="present_address"></textarea>
									</div>
									<div class="col-12 col-md-6">

										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Permanent Address*</label>
										<br/>
										<input type="checkbox" class="same_as_present" /> Same as Present Address
										<textarea class="permanent_address perm_address" name="permanent_address">{permanent_address}</textarea>
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Student Mobile Number :</label>
								
									</div>
									<div class="col-12 col-md-3">
										<input type="text" name="student_mobile_number" class="student_mon_inpt form-control" value="{student_mobile_number}" maxlength="10">
									</div>
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left" >Parent's Mobile No. :</label>
									</div>
									<div class="col-12 col-md-3">
										<input id="father_mo_number" type="text" name="father_mo_number" class="student_mon_inpt form-control" value="{father_mo_number}" maxlength="10" required autocomplete="new">
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">DOB :</label>	
									</div>
									<div class="col-12 col-md-3">
										 <input id="dob" type="text" name="dob" class="examDate student_mon_inpt form-control" value="{dob}" required autocomplete="off">
									</div>
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Place of birth :</label>
									</div>
									<div class="col-12 col-md-3">
										<input  type="text" name="placeOfBirth" class="student_mon_inpt form-control" value="{birth_place}" required autocomplete="new">
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12">
										<label class="fs-14 fw-600 _blckClr_">Date of passing II PUC/Equivalent Examination :</label>	
										<input  type="text" name="year_of_passing" class="w-full student_mon_inpt form-control" value="{year_of_passing}" required autocomplete="new">
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Marks :</label>	
										<p class="fs-14 _blckClr_">
											Obtained in II PUC/ <br>Equivalent Examination
										</p>
									</div>
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Total Marks</label><br/>
										<input type="text" name="extra_exam_total1" value="{extra_exam_total1}" class="scored_input form-control">
									</div>
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Marks Secured</label><br/>
										<input type="text" name="extra_exam_mark1" class="scored_input form-control" value="{extra_exam_mark1}">
									</div>
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Percentage</label><br/>
										<input type="text" name="extra_exam_perc1" value="{extra_exam_perc1}" class="scored_input form-control">
									</div>
								</div>
							</div>
							hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Nationality :</label>	
									</div>
									<div class="col-12 col-md-3">
										 <input id="nationality_citizen_number" type="text" name="natianality" class="student_mon_inpt form-control" value="{natianality}" required autocomplete="new">
									</div>
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Aadhar No. :</label>
									</div>
									<div class="col-12 col-md-3">
										<input  type="text" name="nationality_citizen" class="student_mon_inpt form-control" value="{nationality_citizen}" maxlength="16" required autocomplete="new">
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12 col-md-3">
										<label class="fs-14 fw-600 _blckClr_">Father's Profession:</label>
								
									</div>
									<div class="col-12 col-md-3">
										<input type="text" name="father_Profession" value="{father_Profession}" class="student_mon_inpt form-control">
									</div>
								</div>
								<div class="row m-t-16">
									<div class="col-12 col-md-3">
										<label for="" class="col-form-label _fs14_ fw-600 _blckClr_ text-left">Annual income of family<br> from all sources:</label>
									</div>
									<div class="col-12 col-md-3">
										<input type="text" name="income_all" class="student_mon_inpt form-control" value="{annual_income}" required autocomplete="new">
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="row m-t-30">
								<div class="col-12 text-center">
									<div class="padding-20" style="background: #04053d;">
										<h3 class="_wtClr_ fs-24 m-b-0">
											Previous Academic Detail
										</h3>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 academic-details">
									<table class="table table-bordered srored-table" width="100%;">
										<tr>
											<td colspan="3">
												<span>Name of University / Board:<input type="text" name="board_name" value="{board_name}" class="scored_input form-control"></span>
											</td>
										</tr>
										<tr>
											<td colspan="3">
												<span>Name of College / School:<input type="text" name="school_name_twelth" class="scored_input form-control" value="{school_name_twelth}"></span>
											</td>
										</tr>
										<tr class="text-center">
											<th colspan="3" class="padding-10 oxford_text_clr">Marks Scored in Last Qualifying Examination</th>
										</tr>
										<tr class="text-center">
											<td class="padding-10" width="40%">Subject</td>
											<td class="padding-10" width="30%">Marks Obtained</td>
											<td class="padding-10" width="30%">Percentage</td>
										</tr>
										<tr>
											<td class="padding-10 text-center" width="40%"><input type="text" name="sub1" value="{sub1}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="score1" value="{score1}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="perc1" value="{perc1}" class="scored_input"></td>
										</tr>
										<tr>
											<td class="padding-10 text-center" width="40%"><input type="text" name="sub2" value="{sub2}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="score2" value="{score2}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="perc2" value="{perc2}" class="scored_input"></td>
										</tr>
										<tr>
											<td class="padding-10 text-center" width="40%"><input type="text" name="sub3" value="{sub3}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="score3" value="{score3}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="perc3" value="{perc3}" class="scored_input"></td>
										</tr>
										<tr>
											<td class="padding-10 text-center" width="40%"><input type="text" name="sub4" value="{sub4}" class="scored_input "></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="score4" value="{score4}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="perc4" value="{perc4}" class="scored_input"></td>
										</tr>
										<tr>
											<td class="padding-10 text-center" width="40%"><input type="text" name="sub5" value="{sub5}" class="scored_input "></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="score5" value="{score5}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="perc5" value="{perc5}" class="scored_input"></td>
										</tr>
										<tr>
											<td class="padding-10 text-center" width="40%"><input type="text" name="sub6" value="{sub6}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="score6" value="{score6}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="perc6" value="{perc6}" class="scored_input"></td>
										</tr>
										<tr>
											<td align="right" class="padding-10 text-center" width="40%"><span class="m-l-30">Total</span></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="Tscore" value="{Tscore}" class="scored_input"></td>
											<td class="padding-10 text-center" width="30%"><input type="text" name="Pscore" value="{Pscore}" class="scored_input"></td>
										</tr>
										<!-- <tr class="border">
											<td class="padding-10" width="40%"><span class="m-l-30">Percentage</span></td>
											<td class="padding-10" width="30%"><input type="text" name="Pscore" class="scored_input"></td>
											<td class="padding-10" width="30%"><input type="text" name="Pscore" class="scored_input"></td>
										</tr> -->
									</table>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<h3 class="fs-14 fw-600 _blckClr_">Please encode the following certificate</h3>
								<div class="row m-t-16">
									<div class="col-12 col-md-4">
										<label class="m-l-30 fs-14 _blckClr_">12th Marks Card</label>
										<label class="checkbox_enquiry" style="top:-30px;">
				                        <input type="checkbox" id="twelfth_marks" name="twelfth_marks" {twelfth_marks} class="pivileges singleInput">
				                        <span class="checkmark_enquiry"></span>
				                        </label>
									</div>
									<div class="col-12 col-md-4">
										<label class="m-l-30 fs-14 _blckClr_">10th Marks Card</label>
										<label class="checkbox_enquiry" style="top:-30px;">
				                        <input type="checkbox" name="tenth_marks" {tenth_marks} value="" class="pivileges singleInput">
				                        <span class="checkmark_enquiry"></span>
				                        </label>
									</div>
									<div class="col-12 col-md-4">
										<label class="m-l-30 fs-14 _blckClr_">Migration Certificate</label>
										<label class="checkbox_enquiry" style="top:-30px;">
				                        <input type="checkbox" name="migration" {migration} value="" class="pivileges singleInput">
				                        <span class="checkmark_enquiry"></span>
				                        </label>
									</div>
									<div class="col-12 col-md-4">
										<label class="m-l-30 fs-14 _blckClr_">10th Admit Card</label>
										<label class="checkbox_enquiry" style="top:-30px;">
				                        <input type="checkbox" name="admit_card" {admit_card} value="" class="pivileges singleInput">
				                        <span class="checkmark_enquiry"></span>
				                        </label>
									</div>
									<div class="col-12 col-md-4">
										<label class="m-l-30 fs-14 _blckClr_">School leaving Certificate</label>
										<label class="checkbox_enquiry" style="top:-30px;">
				                        <input type="checkbox" name="school_leaving" {school_leaving} value="" class="pivileges singleInput">
				                        <span class="checkmark_enquiry"></span>
				                        </label>
									</div>
									<div class="col-12 col-md-4">
										<label class="m-l-30 fs-14 _blckClr_">10 Passport Size Photograph</label>
										<label class="checkbox_enquiry" style="top:-30px;">
				                        <input type="checkbox" name="photograph" {photograph} value="" class="pivileges singleInput">
				                        <span class="checkmark_enquiry"></span>
				                        </label>
									</div>
								</div>
							</div>
							<hr class="hr_class">
							<div class="padding-20">
								<div class="row">
									<div class="col-12">
										<div>
										 	<label class="checkbox_enquiry">
					                        <input type="checkbox" value="" class="pivileges singleInput" required>
					                        <span class="checkmark_enquiry"></span>
					                        </label>
					                        <label class="m-l-30 fs-14 _blckClr_">I declare that above information is true and correct to the best of my knowledge and belief. In case any of the above information is found to be false and incorrect, I shall forfeit the clain to considered for a seat in the nursing college. I and /or my parent/guardian will also be liable for such civil/criminal action may take against me/us in this behalf. </label>
										</div>
										<p class="m-t-20 fs-14 _blckClr_">*Antiragging affidavit has to be submitted before joining.</p>
									</div>
								</div>
								<div class="row">
									<div class="col-12 col-md-4">
										<div>
											<label class="fs-14 _blckClr_">Date:</label>
											<input type="text" name="submission_date" class="examDate form-control" value="{submission_date}"  data-toggle="datepicker">
										</div>
										<div>
											<label class="fs-14 _blckClr_">Place:</label>
											<input type="text" name="submission_place" value="{submission_place}" class="form-control">
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div style="position: relative;">
											<label class="signatureDiv" for="imgInp">
												<img id="blah" class="getSignedImage" src="<?php echo base_url();?>uploads/{father_sign}">
												<input type="file" name="father_sign" style="opacity:0" onchange="readURLFirst(this);" id="imgInp" required />
												<div class="_df4df_">
													Signature of Father/Guardian
												</div>
											</label>
										</div>
									</div>
									<div class="col-12 col-md-4">
										<div style="position: relative;">
											<label class="signatureDiv" for="imgInp1">
												<img id="blah1" class="getSignedImage" src="<?php echo base_url();?>uploads/{student_sign}">
												<input type="file" style="opacity:0" name="student_sign" onchange="readURLSecnd(this);" id="imgInp1" required />
												<div class="_df4df_">
													Signature of Student
												</div>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="padding-20">
								<div class="row justify-content-center m-t-30">
								 <input type="hidden" name="enquiry_id" value="{online_enquiry_id}">
					              <div class="col-12 col-md-6 btnposition">
					                <a style="color: #fff" href="javascript:void(0)" class="btn back_btn btn-default _bggry_" style="float: left" data-dismiss="modal">Back</a>
					              </div>
					              <div class="col-12 col-md-6 btn_position">
					              	<input type="hidden" name="payment_link" value="<?php echo $institute[0]->payment_api_key; ?>" />
					                <span class="loadingMyprofile" style="top: 2px; right: -3%"><img src="<?php echo base_url(); ?>assets/dashboard/img/loading7.gif"></span>
					                 <!-- <button type="submit" class="svebtn btn">Save</button> -->
					                 <button type="button" class="print_btn btn">Print</button>
					              </div>
					           </div>
					        </div>
						</div>
					</div>
				</div>
		</div>
	
	</form>
	<!-- </form> -->
</div>


	<script src="<?php echo base_url(); ?>assets/dashboard/libs/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bower-components/datepicker/dist/datepicker.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/dashboard/libs/popper.js/dist/umd/popper.min.js"></script> 
 	<script src="<?php echo base_url(); ?>assets/dashboard/libs/bootstrap/dist/js/bootstrap.min.js"></script>
 
 	<script type="text/javascript">
     window.base_url = './';
  	</script> 
  <!-- Bootstrap -->
  	<script src="<?php echo base_url(); ?>assets/dashboard/libs/datatables/media/js/jquery.dataTables.min.js"></script>
  
  	<script src="<?php echo base_url(); ?>assets/dashboard/libs/pace-progress/pace.min.js"></script>
  <!-- <script src="<?php //echo base_url(); ?>assets/dashboard/libs/pjax/pjax.js"></script> -->
  <!-- <script src="<?php //echo base_url(); ?>assets/dashboard/js/ajax.js"></script> -->
  <!-- lazyload plugin -->
  	<script src="<?php echo base_url(); ?>assets/dashboard/js/lazyload.config.js"></script>
  	<script src="<?php echo base_url(); ?>assets/dashboard/js/lazyload.js"></script>
  	<script src="<?php echo base_url(); ?>assets/dashboard/js/plugin.js"></script>
  	<!-- theme -->
  	<script src="<?php echo base_url(); ?>assets/dashboard/js/theme.js"></script>
  	<!-- <script src="https://unpkg.com/jspdf@latest/dist/jspdf.min.js"></script> -->
  <!-- endbuild -->
  	<script type="text/javascript" src="<?php echo base_url(); ?>assets/dashboard/js/main.js"></script>
  	<script type="text/javascript">
  		function readURLFirst(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

       function readURLSecnd(input) {
		  if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    
		    reader.onload = function(e) {
		      $('#blah1').attr('src', e.target.result);
		    }
		    
		    reader.readAsDataURL(input.files[0]);
		  }
		}

		function getProfileImage(input) {
		  if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    
		    reader.onload = function(e) {
		      $('#profileImg').attr('src', e.target.result);
		      $('#profileImg').css({
		      	'width' : '100%',
		      	'height': '100%'
		      });
		      $('#getText').hide();
		    }
		    
		    reader.readAsDataURL(input.files[0]);
		  }
		}
  	</script>
  	
    <script>
    	$(".print_btn").on("click",function(){
    		window.print(function(){
    			$(".logo_main_ img").css('text-align','center');
    		});
    	});
    </script>

    <script>
    	$(".same_as_present").on('click',function(){
    		if($(this).prop('checked') == true)
	   		{
	   			$present_address = $(".current_address").val();
	   			$(".perm_address").val($present_address);
	   		}else{
	   			$(".perm_address").val("");
	   		}
    	});
   		
    </script>

</body>