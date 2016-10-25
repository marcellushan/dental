 <div class="main container">
 <h3 class="mytitle">Admission Information</h3>
 
 The admission process is competitive and a minimum cumulative GPA of 2.5 out of 4.0 is required 
 for consideration.  Acceptance is based on cumulative GPA, completed application and supporting 
 materials.  Classes will begin in the Summer.
	<h1 class= "mytitle">
	APPLICANT PERSONAL INFORMATION
	</h1>
<?php echo validation_errors(); ?>
	<?php echo form_open('content/school'); ?>
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					
					<label class="col-sm-2 col-xs-5" >First</label><input type="text" class="col-sm-2 col-xs-6" name="first_name" placeholder="required" value="<?php echo set_value('first_name'); ?>">
					<label class="col-sm-2 col-xs-5" >Middle</label><input type="text" class="col-sm-2 col-xs-6"  name="middle_name" value="<?php echo set_value('middle_name'); ?>">
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="last_name" placeholder="required" value="<?php echo set_value('last_name'); ?>">
				</div><!-- row -->
				<div class="row">
					<label class="col-sm-2 col-xs-5" >Date of Birth</label><input type="date" class="col-sm-2 col-xs-6"  name="birthdate" placeholder="required" value="<?php echo set_value('birthdate'); ?>" >
					<label class="col-sm-2 col-xs-5" >GHC ID</label><input type="text" class="col-sm-2 col-xs-6"  name="GHC_ID" value="<?php echo set_value('GHC_ID'); ?>">
					<label class="col-sm-1 col-xs-5" >Maiden </label><input type="text" class="col-sm-2 col-xs-6"  name="maiden_name" value="<?php echo set_value('maiden_name'); ?>">
				</div><!-- row -->
			<div class="row">
				<h2 class="col-lg-6 col-xs-12">Address</h2>
				<h2 class="col-lg-6 visible-lg">Phone and Email</h2>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-lg-2 col-xs-4">Street</label><input type="text" class="col-lg-10 col-xs-7" name="street" >
						<label class="col-lg-2 col-xs-4">City</label><input type="text" class="col-lg-4 col-xs-7" name="city" >
						<label class="col-lg-2 col-xs-4">State</label><input type="text" class="col-lg-1 col-xs-7" name="state" >
						<label class="col-lg-2 col-xs-4">Zip</label><input type="text" class="col-lg-1 col-xs-7" name="zip" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-xs-5">Home Phone</label><input type="text" class="col-xs-6" name="home_phone" >
						<label class="col-xs-5">Cell Phone</label><input type="text" class="col-xs-6" name="cell_phone" >
						<label class="col-xs-5">Home Email</label><input type="text" class="col-xs-6" name="home_email" >
						<label class="col-xs-5">Work Email</label><input type="text" class="col-xs-6" name="work_email" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
			</div><!-- row -->
			
					<div class="row">
			<label class="col-md-3 col-xs-4">Upload Driver's license</label><input type="file" name="drivers_license" id="fileToUpload" class="col-md-3 col-xs-4">
			<label class="col-md-3 col-xs-5">Upload CPR Certificate</label><input type="file" name="cpr" id="fileToUpload" class="col-md-3 col-xs-6">
			</div><!-- row -->
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Go to Dental Hygiene School</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              