 <div class="main container">
 <h3 class="mytitle">Admission Information</h3>
 
	<h1 class= "mytitle">
	EMERGENCY CONTACT INFORMATION
	</h1>

<?php echo validation_errors(); ?>
	<form action='<?=base_url("applicant/put/returning")?>' method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					
					<label class="col-sm-2 col-xs-5" >First</label><input type="text" class="col-sm-2 col-xs-6" name="e_first_name" placeholder="required" value="<?=$applicant->e_first_name ?>">
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="e_last_name" placeholder="required" value="<?=$applicant->e_last_name ?>">
					<label class="col-sm-2 col-xs-5" >Relationship</label><input type="text" class="col-sm-2 col-xs-6"  name="relationship" value="<?=$applicant->relationship ?>">
				</div><!-- row -->
			<div class="row">
				<h2 class="col-lg-6 col-xs-12">Address</h2>
				<h2 class="col-lg-6 visible-lg">Phone and Email</h2>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-lg-2 col-xs-4">Street</label><input type="text" class="col-lg-10 col-xs-7" name="e_street" placeholder="required" value="<?=$applicant->e_street ?>">
						<label class="col-lg-2 col-xs-4">City</label><input type="text" class="col-lg-4 col-xs-7" name="e_city" placeholder="required" value="<?=$applicant->e_city ?>">
						<label class="col-lg-1 col-xs-4">State</label><input type="text" class="col-lg-2 col-xs-7" name="e_state" placeholder="required" value="<?=$applicant->e_state ?>">
						<label class="col-lg-1 col-xs-12">Zip</label><input type="text" class="col-lg-2 col-xs-6" name="e_zip" value="<?=$applicant->e_zip ?>">
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-xs-5">Preferred Phone</label><input type="text" class="col-xs-6" name="e_preferred_phone" placeholder="required" value="<?=$applicant->e_preferred_phone ?>">
						<label class="col-xs-5">Backup Phone</label><input type="text" class="col-xs-6" name="e_backup_phone"  value="<?=$applicant->e_backup_phone ?>">
						<label class="col-xs-5">Preferred Email</label><input type="text" class="col-xs-6" name="e_email" placeholder="required" value="<?=$applicant->e_email ?>">
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
			</div><!-- row -->
	
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Update</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              