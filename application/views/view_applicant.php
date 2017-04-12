 <div class="main container">
	<h1 class= "mytitle">
        Name:  <?=$applicant->first_name?>   <?=$applicant->middle_name?> <?=$applicant->last_name?><?=@$verified ?>
	</h1>
	 <div>
	    <h2  class= "mytitle">Application Status <?=$admin ?></h2>
		 <div class="wrapper"> <input type="button" class="btn btn-lg btn-primary" onclick="window.location.href='../'"value="Return To List">
			 <input type="button" class="btn btn-info btn-lg" onclick="window.location.href='<? echo base_url() ?>admin/display/comment/<?=$applicant->applicant_id ?>'"value="Add a Comment"></div>
		 <h3 class="wrapper">Comment(s)</h3>
		 <?php foreach ($comments as $comment):?>
			 <div class="row">
					 <h4 class="col-md-1">Comment</h4>
					 <h4 class="item col-md-5"><?=$comment->comment?></h4>
					 <h4 class="col-md-1">Admin</h4>
					 <h4 class="item col-md-1"><?=$comment->admin?></h4>
					 <h4 class="col-md-1">Date</h4>
					 <h4 class="item col-md-2"><?=$comment->submission_date?></h4>
			 </div><!-- row -->
		 <?php endforeach;?>

			<div class="row">
				<div class="col-md-6">
					<h3 class="col-md-6">Start Date:</h3>
					<h3 class="item col-md-5"><?=date_format(date_create($applicant->application_date), 'F d Y') ?></h3>
				</div>
				<div class="col-md-6">
					<h3 class="col-md-6">Submit Date</h3>
					<h3 class="item col-md-5"><?=($applicant->submitted ? date_format(date_create($applicant->submit_date), 'F d Y')  : "Not Submitted")?></h3>
				</div>
			</div><!--row-->
		 <div class="row">
			 <div class="col-md-6">
				 <? if($applicant->complete):?>
					 <h3 class="col-md-11">Marked Complete by: <?=$applicant->complete_by ?></h3>
					 <h3 class="col-md-11">Complete Date:  <?=date_format(date_create($applicant->complete_date), 'F d Y') ?></h3>
				 <? else:?>
					 <div class="col-md-11"> <input type="button" class="btn btn-warning btn-lg"
													onclick="window.location.href='<? echo base_url() ?>admin/update/complete/<?=$applicant->applicant_id ?>'" value="Mark Complete" <? echo (@$verified ? "" : "disabled") ?>></div>
				 <? endif;?>
			 </div>
			 <div class="col-md-6">
				 <? if($applicant->funds):?>
					 <h3 class="col-md-11">Funds Received by: <?=$applicant->funds_by ?></h3>
					 <h3 class="col-md-11">Funds Received Date:  <?=date_format(date_create($applicant->funds_date), 'F d Y') ?></h3>
				 <? else:?>
					 <div class="col-md-11"> <input type="button" class="btn btn-success btn-lg" onclick="window.location.href='<? echo base_url() ?>admin/update/funds/<?=$applicant->applicant_id ?>'"value="Funds Received"></div>
				 <? endif;?>
			 </div>
		 </div><!--row-->

		<div class="section-border">
			<h2  class= "mytitle">Personal Information</h2>
				 <div class="row">
					 <div class="col-md-6">
						 <h3 class="wrapper">Address</h3>
				 		<div class="row">
						<h4 class="col-md-2">Street</h4><h4 class="item col-md-9"><? echo ($applicant->street ? $applicant->street : "Not Provided" )?></h4>
						<h4 class="col-md-2">City</h4><h4 class="item col-md-2"><? echo ($applicant->city ? $applicant->city : "Not Provided" )?></h4>
					 	<h4 class="col-md-1">State</h4><h4 class="item col-md-1"><? echo ($applicant->state ? $applicant->state : "Not Provided" )?></h4>
						<h4 class="col-md-1">Zip</h4><h4 class="item col-md-1"><? echo ($applicant->zip ? $applicant->zip : "Not Provided" )?></h4>
					 </div>
			 		</div>
					 <div class="col-md-6">
						 <h3 class="wrapper">Other Information</h3>
						 <div class="row">
							 <h4 class="col-md-6">Birth Date</h4><h4 class="item col-md-5"><? echo ($applicant->birth_date ? date_format(date_create($applicant->birth_date), 'F d Y') : "Not Provided" )?></h4> <h4 class="col-md-6">GHC ID</h4><h4 class="item col-md-5"><?=$applicant->GHC_ID?></h4>
						 </div>
					 </div>
			 </div><!-- row -->
				 <div class="row">
					 <div class="col-md-6">
						 <h3 class="wrapper">Phone Numbers</h3>
						 <div class="row">
							 <h4 class="col-md-2">Preferred</h4><h4 class="item col-md-9"><? echo ($applicant->preferred_phone ? $applicant->preferred_phone : "Not Provided" )?></h4>
							 <h4 class="col-md-2">Backup</h4><h4 class="item col-md-9"><? echo ($applicant->backup_phone ? $applicant->backup_phone : "Not Provided" )?></h4>
						 </div>
					 </div>
					 <div class="col-md-6">
						 <h3 class="wrapper">Email Addresses</h3>
						 <div class="row">
							 <h4 class="col-md-2">Preferred</h4><h4 class="item col-md-9"><?=$applicant->preferred_email?></h4>
							 <h4 class="col-md-2">Backup</h4><h4 class="item col-md-9"><? echo ($applicant->backup_email ? $applicant->backup_email : "Not Provided" )?></h4>
						 </div>
					 </div>
				 </div><!-- row -->
		</div><!--section-border -->
			<div class="row">
					<div class="col-md-6">
						<h3>&nbsp;Identification</h3>
						<div class="row">
							<? if($applicant->identification): ?>
								<h4 class="col-md-8">
									<? if($applicant->identification_verified): ?>
										Verified by <?=$applicant->identification_verified_by ?> on <?=$applicant->identification_verified_date ?>
										<a href="<? echo base_url() ?>admin/viewImage/identification/<?=$applicant->applicant_id ?>"><? echo ($applicant->identification ? "Image" : "No Image Available") ?></a>
									<? else: ?>
										<input type="button" class="btn btn-info btn-lg" onclick="window.location.href='<?echo base_url() ?>admin/verify/identification/<?=$applicant->applicant_id ?>'"value="Verify">
									<? endif; ?>
							<? endif; ?>
						</div><!-- row -->
						<h3>&nbsp;CPR Certification</h3>

						<div class="row">
							<? if($applicant->cpr): ?>
							<h4 class="col-md-8">
								<? if($applicant->cpr_verified): ?>
									Verified by <?=$applicant->cpr_verified_by ?> on  <?=$applicant->cpr_verified_date ?>
									<a href="<? echo base_url() ?>admin/viewImage/cpr/<?=$applicant->applicant_id ?>"><? echo ($applicant->cpr ? "Image" : "No Image Available") ?></a>
								<? else: ?>

									<input type="button" class="btn btn-info btn-lg" onclick="window.location.href='<?echo base_url() ?>admin/verify/cpr/<?=$applicant->applicant_id ?>'"value="Verify">
								<? endif; ?>
							<? endif; ?>
						</div><!-- row -->
					</div><!--col-md-6 -->
				<div class="col-md-6">
					<h3>School</h3>
					<? if($applicant->school): ?>
					<div class="row">
						<h4 class="col-md-4">Name</h4>
						<h4 class="item col-md-7"><?=$applicant->school?></h4>
						<h4 class="col-md-4">State</h4>
						<h4 class="item col-md-7"><?=$applicant->school_state?></h4>
						<h4 class="col-md-4">Graduation Year</h4>
						<h4 class="item col-md-7"><?=$applicant->school_year?></h4>
					</div><!-- row -->
					<? endif; ?>
				</div><!--col-md-6 -->
				</div>

		 <div class="section-border">
		 <div class="row">
			<h3 class="wrapper">License(s)</h3>
				 <? if($licenses): ?>
				<?php foreach ($licenses as $license):?>
					<h4 class="col-md-1">State</h4>
					<h4 class="item col-md-1"><?=$license->state?></h4>
					<h4 class="col-md-1">Number</h4>
					<h4 class="item col-md-1"><?=$license->number?></h4>
					<h4 class="col-md-1">Active</h4>
					<h4 class="item col-md-1"><? echo ($license->active ? "Yes" : "No"); ?></h4>
					<h4 class="col-md-5">
						<? if($license->verified): ?>
							Verified by <?=$license->verified_by ?> on <?=$license->verified_date ?>
							<a href="<? echo base_url() ?>license/viewImage/<?=$license->license_id ?>">Image</a>
						<? else: ?>
							<!--<a href="../../license/verify/<?=$license->license_id?>/<?=$applicant->applicant_id?>">Verify</a></h4>-->
						<input type="button" class="btn btn-info btn-lg" onclick="window.location.href='<? echo base_url() ?>license/verify/<?=$license->license_id?>/<?=$applicant->applicant_id?>'"value="Verify">
						<? endif; ?>
					</h4>

				<?php endforeach;?>

				 <? endif; ?>
		</div>
		 <? if($applicant->discipline):?>
		 <h3 class="wrapper">Disciplinary Action</h3>
		 <div class="row">
			 <h4 class="item col-md-8 col-md-offset-2"><?=$applicant->discipline ?></h4>
			 <? endif;?>
		 </div><!-- row -->

		 <h2 class="wrapper">Emergency Contact</h2>
		 <div class="row">
			 <h4 class="col-md-1">Name</h4>
			 <h4 class="item col-md-2"><?=$applicant->e_last_name?>, <?=$applicant->e_first_name?></h4>
			 <h4 class="col-md-2">Relationship</h4>
			 <h4 class="item col-md-1"><?=$applicant->relationship?></h4>
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
		 </div><!--section-border -->
		 <? if($employers):?>

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


				 <? if($transcripts): ?>

                 <h3 class="wrapper">Transcript(s)</h3>

						 <?php foreach ($transcripts as $transcript):?>
                         <div class="row">
                             <h4 class="col-md-3">School</h4>
                             <h4 class="item col-md-3"><?=$transcript->school?></h4>
                             <h4 class="col-md-3">Image</h4>
                             <h4 class="item col-md-2"><a href="<?=$transcript->image?>" target="_blank">Image</a></h4>
                         </div><!-- row -->
						 <?php endforeach;?>

				 <? endif; ?>

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
					 <h4 class="item col-md-2"><?=@$race->race_text?></h4>
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

