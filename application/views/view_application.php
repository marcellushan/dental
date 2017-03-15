<div class="main container" xmlns="http://www.w3.org/1999/html">
	<h1 class= "mytitle">
        Name:  <?=$applicant->first_name?>   <?=$applicant->middle_name?> <?=$applicant->last_name?>
	</h1>
	<div class="row">
		<h3 class="col-md-4 col-md-offset-3">Application Start Date:</h3>
		<h3 class="item col-md-5"><?=date_format(date_create($applicant->application_date), 'F d Y') ?></h3>
	</div><!--row-->
	<? if($applicant->submitted) : ?>
		<div class="row">
			<h3 class="col-md-4 col-md-offset-3">Application Submit Date:</h3>
			<h3 class="item col-md-5"><?=date_format(date_create($applicant->submit_date), 'F d Y') ?></h3>
		</div><!--row-->
		<div class="row">
			<h3 class="col-md-4 col-md-offset-3">Application Complete</h3>
			<h3 class="item col-md-5"><? echo ($applicant->complete ? date_format(date_create($applicant->complete_date), 'F d Y') : "Not Complete") ?> </h3>
		</div><!--row-->
			<div class="row">
				<h3 class="col-md-4 col-md-offset-3">Fund Receipt</h3>
				<h3 class="item col-md-5"><? echo ($applicant->funds ? date_format(date_create($applicant->funds_date), 'F d Y') : "Not Received") ?> </h3>
			</div><!--row-->
	<? else: ?>
	 <form action="../applicant/put/thank_you" method="post">
		 <input type="hidden" name="submitted" value="1">
		 <input type="hidden" name="submit_date" value="<? echo date('Y-m-d') ?>">
	 <div class="row">
		 <div class="wrapper">
			 <input type="submit" class="btn btn-success btn-lg" value="Submit Application">
		 </div>
	 </div><!-- row -->
	</form>
	<?endif; ?>
		<div class="section-border">
			<h2  class= "mytitle">Personal Information&nbsp;
				<? if(! $applicant->complete) : ?>
				<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>applicant/get/personal/1'"value="Update Personal">
				<? endif; ?>
			</h2>

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
		</div><!-- section-border -->
			<div class="row">
					<div class="col-md-6">

						<h3>&nbsp;Identification
							<? if(! $applicant->complete) : ?>
								<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>applicant/get/identification/1'"value="Update Identification">
							<? endif; ?>
						</h3>
						<div class="row">
							<h4 class="col-md-3"><a href="<?=@$applicant->identification ?>" target="_blank">Image</a></h4>
						</div><!-- row -->
						<h3>&nbsp;CPR Certification</h3>
						<div class="row">
							<h4 class="col-md-2">Expiration Date</h4>
							<h4 class="col-md-3"><?=@$applicant->cpr_expiration_date?></h4>
							<h4 class="col-md-1"><a href="<?=@$applicant->cpr ?>" target="_blank">Image</a></h4>
						</div><!-- row -->
					</div><!--col-md-6 -->
				<div class="col-md-6">
					<h3>School
						<? if(! $applicant->complete) : ?>
							<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>applicant/get/school/1'"value="Update School">
						<? endif; ?>
					</h3>
					<div class="row">
						<h4 class="col-md-4">Name</h4>
						<h4 class="item col-md-7"><?=@$applicant->school ?></h4>
						<h4 class="col-md-4">State</h4>
						<h4 class="item col-md-7"><?=@$applicant->school_state?></h4>
						<h4 class="col-md-4">Graduation Year</h4>
						<h4 class="item col-md-7"><?=@$applicant->school_year?></h4>
					</div><!-- row -->
				</div><!--col-md-6 -->
			</div>
		<div class="row">
			<h3 class="wrapper">License(s)
				<? if(! $applicant->complete) : ?>
					<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>license/get'"value="Update License">
				<? endif; ?></h3>
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
		 <? if($applicant->discipline):?>
		 <h3 class="wrapper">Disciplinary Action</h3>
		 <div class="row">
			 <h4 class="item col-md-8 col-md-offset-2"><?=$applicant->discipline ?></h4>
			 <? endif;?>
		 </div><!-- row -->
		<div class="section-border">
		 <h2 class="wrapper">Emergency Contact
			 <? if(! $applicant->complete) : ?>
				 <input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>applicant/get/emergency/1'"value="Update Emergency Contact">
			 <? endif; ?>
		 </h2>
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
		<h3 class="wrapper">Employer(s)
			<? if(! $applicant->complete) : ?>
				<input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>employer/get'"value="Update Employers">
			<? endif; ?>
		</h3>

		</h3>
		<div class="row">
			<?php foreach ($employers as $employer):?>
				<h4 class="col-md-2">Company</h4>
				<h4 class="item col-md-3"><?=$employer->company?></h4>
				<h4 class="col-md-2">Phone</h4>
				<h4 class="item col-md-3"><?=$employer->phone?></h4>
			<?php endforeach;?>
		</div><!-- row -->
			 <? else: ?>
				 <h3 class="wrapper">No Employers Given
					 <? if(! $applicant->complete) : ?>
						 <input type="button" class="btn btn-danger btn-lg" onclick="window.location.href='<? echo base_url() ?>employer/get'"value="Add Employers">
					 <? endif; ?>
				 </h3>
		 <?endif;?>
			 <? if($transcripts): ?>
					 <h3 class="wrapper">Transcript(s)</h3>

					 <?php foreach ($transcripts as $transcript):?>
						 <div class="row">
							 <h4 class="col-md-3">School</h4>
							 <h4 class="item col-md-3"><?=$transcript->school?></h4>
							 <h4 class="col-md-3">Image</h4>
							 <h4 class="item col-md-2"><a href="<?=$transcript->image?>">Image</a></h4>
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
			 </div><!--col-md-6 -->
			 <div class="col-md-6">
				 <h3>Demographics</h3>
				 <div class="row">
					 <h4 class="col-md-3">Race</h4>
					 <h4 class="item col-md-2"><? echo (@$race->race_text ? $race->race_text : 'Not Provided')?></h4>
					 <h4 class="col-md-3">Gender</h4>
					 <h4 class="item col-md-2"><? echo (! @$applicant->gender ? 'Not Provided' : ($applicant->gender== 1 ? "Male" : "Female")); ?></h4>
					 <h4 class="col-md-3">Latino</h4>
					 <h4 class="item col-md-2"><? echo (! @$applicant->latino ? 'Not Provided' : ($applicant->latino== 1 ? "Yes" : "No")); ?></h4>
					 <h4 class="col-md-3">Foreign</h4>
					 <h4 class="item col-md-2"><? echo (! @$applicant->foreign ? 'Not Provided' : ($applicant->foreign== 1 ? "Yes" : "No")); ?></h4>
				 </div><!-- row -->
			 </div><!--col-md-6 -->
		 </div><!-- row -->
					 <p></p>


 </div><!-- main container -->

