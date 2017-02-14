 <div class="main container">
	<h1 class= "mytitle">
        Name:  <?=$applicant->first_name?>   <?=$applicant->middle_name?> <?=$applicant->last_name?>
	</h1>
	 <div>
	    <h2  class= "mytitle">Application Status</h2>
		 <div class="wrapper"> <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='../'"value="Return To List"> <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='../../home/display/comment'"value="Add a Comment"></div>
		 <h3 class="wrapper">Comment(s)</h3>
		 <?php foreach ($comments as $comment):?>
			 <div class="row">
					 <h4 class="col-md-1">Comment</h4>
					 <h4 class="item col-md-5"><?=$comment->comment?></h4>
					 <h4 class="col-md-1">Admin</h4>
					 <h4 class="item col-md-1"><?=$comment->admin_id?></h4>
					 <h4 class="col-md-1">Date</h4>
					 <h4 class="item col-md-2"><?=$comment->submission_date?></h4>
			 </div><!-- row -->
		 <?php endforeach;?>

			<div class="row">
				<div class="col-md-6">
					<h3 class="col-md-7">Application Start Date:</h3>
					<h3 class="item col-md-4"><?=$applicant->application_date?></h3>
					<h3 class="col-md-7">Application Submit Date</h3>
					<h3 class="item col-md-4"><?=($applicant->submitted ? $applicant->submit_date : "Not Submitted")?></h3>
				</div>
				<div class="col-md-6">
					<? if($applicant->complete):?>
					 <h4 class="col-md-5">Application Marked Complete by: <?=$applicant->complete ?></h4>
					 <h4 class="col-md-5">Application Complete Date:  <?=$applicant->complete_date ?></h4>
					<? else:?>
					<div class="col-md-11"> <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='../update/complete/<?=$applicant->applicant_id ?>'" value="Mark Application Complete"></div>
					<? endif;?>
					<? if($applicant->funds):?>
						<h4 class="col-md-5">Application Funds Received by: <?=$applicant->funds ?></h4>
						<h4 class="col-md-5">Application Funds Received Date:  <?=$applicant->funds_date ?></h4>
					<? else:?>
						<div class="col-md-11"> <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='../update/funds/<?=$applicant->applicant_id ?>'"value="Application Funds Received"></div>
					<? endif;?>
				</div>
			</div><!--row-->

		 <div class="section-border">
			<h2  class= "mytitle">Personal Information</h2>
				 <div class="row">
					 <div class="col-md-6">
						 <h3 class="wrapper">Address</h3>
				 		<div class="row">
						<h4 class="col-md-2">Street</h4><h4 class="item col-md-9"><?=$applicant->street?></h4> <h4 class="col-md-2">City</h4><h4 class="item col-md-2"><?=$applicant->city?></h4>
					 	<h4 class="col-md-1">State</h4><h4 class="item col-md-1"><?=$applicant->state?></h4><h4 class="col-md-1">Zip</h4><h4 class="item col-md-1"><?=$applicant->zip?></h4>
					 </div>
			 		</div>
					 <div class="col-md-6">
						 <h3 class="wrapper">Other Information</h3>
						 <div class="row">
							 <h4 class="col-md-6">Birth Date</h4><h4 class="item col-md-5"><?=$applicant->birth_date?></h4> <h4 class="col-md-6">GHC ID</h4><h4 class="item col-md-5"><?=$applicant->GHC_ID?></h4>
						 </div>
					 </div>
			 </div><!-- row -->
				 <div class="row">
					 <div class="col-md-6">
						 <h3 class="wrapper">Phone Numbers</h3>
						 <div class="row">
							 <h4 class="col-md-2">Preferred</h4><h4 class="item col-md-9"><?=$applicant->preferred_phone?></h4>
							 <h4 class="col-md-2">Backup</h4><h4 class="item col-md-9"><?=$applicant->backup_phone?></h4>
						 </div>
					 </div>
					 <div class="col-md-6">
						 <h3 class="wrapper">Email Addresses</h3>
						 <div class="row">
							 <h4 class="col-md-2">Preferred</h4><h4 class="item col-md-9"><?=$applicant->preferred_email?></h4>
							 <h4 class="col-md-2">Backup</h4><h4 class="item col-md-9"><?=$applicant->backup_email?></h4>
						 </div>
					 </div>
				 </div><!-- row -->
			<div class="row">
					<div class="col-md-6">
						<h3>&nbsp;Identification</h3>
						<div class="row">
							<h4 class="col-md-3"><a href="../../identification/verify/<?=$identification->identification_id?>" target="_blank">Verify</a></h4>
						</div><!-- row -->
						<h3>&nbsp;CPR Certification</h3>
						<div class="row">
							<h4 class="col-md-3">Date</h4>
							<h4 class="col-md-4"><?=$cpr->submission_date?></h4>
							<h4 class="col-md-3"><a href="<?=$cpr->image?>" target="_blank">Image</a></h4>
						</div><!-- row -->
					</div><!--col-md-6 -->
				<div class="col-md-6">
					<h3>School</h3>
					<div class="row">
						<h4 class="col-md-4">Name</h4>
						<h4 class="item col-md-7"><?=$school->name?></h4>
						<h4 class="col-md-4">State</h4>
						<h4 class="item col-md-7"><?=$school->state?></h4>
						<h4 class="col-md-4">Graduation Year</h4>
						<h4 class="item col-md-7"><?=$school->year?></h4>
					</div><!-- row -->
				</div><!--col-md-6 -->
		 </div><!-- section-border -->
			 <div class="section-border">
			<h3 class="wrapper">License(s)</h3>
			<div class="row">
				<?php foreach ($licenses as $license):?>
					<h4 class="col-md-2">State of Licensure</h4>
					<h4 class="item col-md-1"><?=$license->state?></h4>
					<h4 class="col-md-2">License Number</h4>
					<h4 class="item col-md-1"><?=$license->number?></h4>
					<h4 class="col-md-1">Active</h4>
					<h4 class="item col-md-2"><? echo ($license->active ? "Yes" : "No"); ?></h4>
					<h4 class="col-md-1"><a href="<?=$license->image?>" target="_blank">Image</a></h4>

				<?php endforeach;?>
			</div><!-- row -->
		</div><!-- section-border -->
		 <? if($applicant->discipline):?>
		 <h3 class="wrapper">Disciplinary Action</h3>
		 <div class="row">
			 <h4 class="item col-md-8 col-md-offset-2"><?=$applicant->discipline ?></h4>
			 <? endif;?>
		 </div><!-- row -->
         <div class="section-border">
		 <h2 class="wrapper">Emergency Contact</h2>
		 <div class="row">
			 <h4 class="col-md-1">Name</h4>
			 <h4 class="item col-md-2"><?=$applicant->e_last_name?>, <?=$applicant->e_first_name?></h4>
			 <h4 class="col-md-1">Relationship</h4>
			 <h4 class="item col-md-2"><?=$applicant->relationship?></h4>
			 <h4 class="col-md-1">Address</h4>
			 <h4 class="item col-md-4"><?=$applicant->e_street?>, <?=$applicant->e_city?> <?=$applicant->e_state?>, <?=$applicant->e_zip?></h4>
		 </div><!-- row  -->

			<h3 class="wrapper">Phone Numbers</h3>
			<div class="row">
				<h4 class="col-md-2">Preferred</h4>
				<h4 class="item col-md-3"><?=$applicant->e_preferred_phone?></h4>
				<h4 class="col-md-2">Backup</h4>
				<h4 class="item col-md-3"><?=($applicant->e_backup_phone ? $applicant->e_backup_phone : "None Provided")?></h4>
			</div><!-- row -->
		 </div><!-- section-border -->
		 <? if($employers):?>
		 <div class="section-border">
		<h3 class="wrapper">Employer(s)</h3>
		<div class="row">
			<?php foreach ($employers as $employer):?>
				<h4 class="col-md-2">Company</h4>
				<h4 class="item col-md-3"><?=$employer->company?></h4>
				<h4 class="col-md-2">Phone</h4>
				<h4 class="item col-md-3"><?=$employer->phone?></h4>
			<?php endforeach;?>
		</div><!-- row -->
			 <? else: ?>
				 <h3 class="wrapper">No Employers Given</h3>
		 <?endif;?>
		</div><!-- section-border -->
		 <div class="row">
			 <div class="col-md-6">
				<h3>Program Questions</h3>
				<div class="row">
					<h4 class="col-md-6">How do you plan to attend?</h4>
					<h4 class="item col-md-5"><? echo ($applicant->student_type ? "Full Time" : "Part Time"); ?></h4>
					<h4 class="col-md-12">How did you hear about us?</h4>
					<h4 class="item col-md-12"><?=$applicant->hear ?></h4>
				</div><!-- row -->
			 </div>
			 <div class="col-md-6">
				 <h3>Demographics</h3>
				 <div class="row">
					 <h4 class="col-md-3">Race</h4>
					 <h4 class="item col-md-2"><?=$race->race_text?></h4>
					 <h4 class="col-md-3">Gender</h4>
					 <h4 class="item col-md-2"><? echo ($applicant->gender ? "Male" : "Female"); ?></h4>
					 <h4 class="col-md-3">Latino</h4>
					 <h4 class="item col-md-2"><? echo ($applicant->latino ? "Yes" : "No"); ?></h4>
					 <h4 class="col-md-3">Foreign</h4>
					 <h4 class="item col-md-2"><? echo ($applicant->foreign ? "Yes" : "No"); ?></h4>
				 </div><!-- row -->
			 </div>
		 </div>


 </div><!-- main container -->

