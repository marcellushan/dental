 <div class="main container">
	<h1 class= "mytitle">
		APPLICANT PERSONAL INFORMATION
	</h1>
	<h2  class= "mytitle">Name:  <?=$application->first_name?>   <?=$application->middle_name?> <?=$application->last_name?></h2>
	<div class="row">
		<h4 class="col-md-2">Date of Birth</h4>
		<h4 class="item col-md-3"><?=$application->birthdate?></h4>
		<h4 class="col-md-2">GHC ID</h4>
		<h4 class="item col-md-3"><?=$application->GHC_ID?></h4>
		<h4 class="col-md-2">Address</h4>
		<h4 class="item col-md-8"><?=$application->street?>, <?=$application->city?> <?=$application->state?>, <?=$application->zip?></h4>
	</div><!-- row  -->
	<h3 class="wrapper">Documents</h3>
	<div class="row">
		<h4 class="col-md-5"><a href="<?=$driver->url?>" target="_blank">Driver's License</a></h4>
		<h4 class="col-md-6"><a href="<?=$cpr->url?>" target="_blank">CPR Certificate</a></h4>
	</div><!-- row -->
	<h3 class="wrapper">Phone Numbers</h3>
	<div class="row">
		<h4 class="col-md-2">Home</h4>
		<h4 class="item col-md-3"><?=$application->home_phone?></h4>
		<h4 class="col-md-2">Cell</h4>
		<h4 class="item col-md-3"><?=$application->cell_phone?></h4>
	</div><!-- row -->
	<h3 class="wrapper">Email Addresses</h3>
	<div class="row">
		<h4 class="col-md-2">Home</h4>
		<h4 class="item col-md-3"><?=$application->home_email?></h4>
		<h4 class="col-md-2">Work</h4>
		<h4 class="item col-md-3"><?=$application->work_email?></h4>
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
		<h4 class="item col-md-3"><?=$emergency->last_name?>, <?=$emergency->first_name?></h4>
		<h4 class="col-md-2">Relationship</h4>
		<h4 class="item col-md-3"><?=$emergency->relationship?></h4>
		<h4 class="col-md-2">Address</h4>
		<h4 class="item col-md-8"><?=$emergency->street?>, <?=$emergency->city?> <?=$emergency->state?>, <?=$emergency->zip?></h4>
	</div><!-- row  -->
	<h3 class="wrapper">Phone Numbers</h3>
	<div class="row">
		<h4 class="col-md-2">Home</h4>
		<h4 class="item col-md-3"><?=$emergency->home_phone?></h4>
		<h4 class="col-md-2">Cell</h4>
		<h4 class="item col-md-3"><?=$emergency->cell_phone?></h4>
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
		<h4 class="item col-md-2"><? echo ($demo->fulltime ? "Full Time" : "Part Time"); ?></h4>
	</div><!-- row -->
	
<h3 class="wrapper">Demographics</h3>
	<div class="row">
		<h4 class="col-md-1">Race:</h4>
		<h4 class="item col-md-4"><?=$race_text->race_text?></h4>
		<h4 class="col-md-2">Gender:</h4>
		<h4 class="item col-md-2"><? echo ($demo->male ? "Male" : "Female"); ?></h4>
		<h4 class="col-md-3">Foreign Student?</h4>
		<h4 class="item col-md-2"><? echo ($demo->foreign ? "Yes" : "No"); ?></h4>
	</div><!-- row -->

</div><!-- container -->
