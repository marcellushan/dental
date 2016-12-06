 <div class="main container">
	<h1 class= "mytitle">
		APPLICANT PERSONAL INFORMATION
	</h1>
	<h2  class= "mytitle">Name:  <?=$applicant->first_name?>   <?=$applicant->middle_name?> <?=$applicant->last_name?></h2>
	<div class="row">
		<h4 class="col-md-2">Date of Birth</h4>
		<h4 class="item col-md-3"><?=$applicant->birth_date?></h4>
		<h4 class="col-md-2">GHC ID</h4>
		<h4 class="item col-md-3"><?=$applicant->GHC_ID?></h4>
		<h4 class="col-md-2">Address</h4>
		<h4 class="item col-md-8"><?=$applicant->street?>, <?=$applicant->city?> <?=$applicant->state?>, <?=$applicant->zip?></h4>
	</div><!-- row  -->
	<h3 class="wrapper">Documents</h3>
	<div class="row">
		<h4 class="col-md-5"><a href="<?=$applicant->driver?>" target="_blank">Driver's License</a></h4>
		<h4 class="col-md-6"><a href="<?=$applicant->cpr?>" target="_blank">CPR Certificate</a></h4>
	</div><!-- row -->
	<h3 class="wrapper">Phone Numbers</h3>
	<div class="row">
		<h4 class="col-md-2">Preferred</h4>
		<h4 class="item col-md-3"><?=$applicant->preferred_phone?></h4>
		<h4 class="col-md-2">Backup</h4>
		<h4 class="item col-md-3"><?=$applicant->backup_phone?></h4>
	</div><!-- row -->
	<h3 class="wrapper">Email Addresses</h3>
	<div class="row">
		<h4 class="col-md-2">Preferred</h4>
		<h4 class="item col-md-3"><?=$applicant->preferred_email?></h4>
		<h4 class="col-md-2">Backup</h4>
		<h4 class="item col-md-3"><?=$applicant->backup_email?></h4>
	</div><!-- row -->
	<h3 class="wrapper">School</h3>
	<div class="row">
		<h4 class="col-md-1">Name</h4>
		<h4 class="item col-md-2"><?=$school->name?></h4>
		<h4 class="col-md-1">State</h4>
		<h4 class="item col-md-2"><?=$school->state?></h4>
		<h4 class="col-md-2">Graduation Year</h4>
		<h4 class="item col-md-2"><?=$school->year?></h4>
	</div><!-- row -->
	<h3 class="wrapper">License(s)</h3>
	<div class="row">
		<?php foreach ($licenses as $license):?>
			<h4 class="col-md-2">State of Licensure</h4>
			<h4 class="item col-md-2"><?=$license->state?></h4>
			<h4 class="col-md-2">License Number</h4>
			<h4 class="item col-md-2"><?=$license->number?></h4>
			<h4 class="col-md-1">Active</h4>
			<h4 class="item col-md-2"><? echo ($license->active ? "Yes" : "No"); ?></h4>
		<?php endforeach;?>
	</div><!-- row -->
	<h3 class="wrapper">Emergency Contact</h3>
	<div class="row">
		<h4 class="col-md-2">Name</h4>
		<h4 class="item col-md-3"><?=$applicant->e_last_name?>, <?=$applicant->e_first_name?></h4>
		<h4 class="col-md-2">Relationship</h4>
		<h4 class="item col-md-3"><?=$applicant->relationship?></h4>
		<h4 class="col-md-2">Address</h4>
		<h4 class="item col-md-8"><?=$applicant->e_street?>, <?=$applicant->e_city?> <?=$applicant->e_state?>, <?=$applicant->e_zip?></h4>
	</div><!-- row  -->
	<h3 class="wrapper">Phone Numbers</h3>
	<div class="row">
		<h4 class="col-md-2">Preferred</h4>
		<h4 class="item col-md-3"><?=$applicant->e_preferred_phone?></h4>
		<h4 class="col-md-2">Backup</h4>
		<h4 class="item col-md-3"><?=$applicant->e_backup_phone?></h4>
	</div><!-- row -->
	<h3 class="wrapper">Employer(s)</h3>
	<div class="row">
		<?php foreach ($employers as $employer):?>
			<h4 class="col-md-2">Company</h4>
			<h4 class="item col-md-2"><?=$employer->company?></h4>
			<h4 class="col-md-2">Phone</h4>
			<h4 class="item col-md-2"><?=$employer->phone?></h4>
			<h4 class="col-md-1">Current</h4>
			<h4 class="item col-md-2"><? echo ($employer->current ? "Yes" : "No"); ?></h4>
		<?php endforeach;?>
	</div><!-- row -->
	<h3 class="wrapper">Program Questions</h3>
	<div class="row">
		<h4 class="col-md-3">How do you plan to attend?</h4>
		<h4 class="item col-md-2"><? echo ($applicant->student_type ? "Full Time" : "Part Time"); ?></h4>
		<h4 class="col-md-3">How did you hear about us?</h4>
		<h4 class="item col-md-2"><?=$applicant->hear ?></h4>
	</div><!-- row -->
	
<h3 class="wrapper">Demographics</h3>
	<div class="row">
		<h4 class="col-md-1">Race:</h4>
		<h4 class="item col-md-4"><?=$applicant->race?></h4>
		<h4 class="col-md-2">Gender:</h4>
		<h4 class="item col-md-2"><? echo ($applicant->gender ? "Male" : "Female"); ?></h4>
		<h4 class="col-md-3">Foreign Student?</h4>
		<h4 class="item col-md-2"><? echo ($applicant->foreign ? "Yes" : "No"); ?></h4>
	</div><!-- row -->

</div><!-- container -->
