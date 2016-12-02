 <div class="main container">
 <h3 class="mytitle">Admission Information</h3>
 
 The admission process is competitive and a minimum cumulative GPA of 2.5 out of 4.0 is required 
 for consideration.  Acceptance is based on cumulative GPA, completed application and supporting 
 materials.  Classes will begin in the Summer.
	<h1 class= "mytitle">
	APPLICANT PERSONAL INFORMATION
	</h1>

<?php echo validation_errors(); ?>
	<?php echo form_open('home/address'); ?>
		<fieldset>
			<h2>Name</h2>
				<div class="row">	
					<label class="col-sm-2 col-xs-5" >First</label><input type="text" class="col-sm-2 col-xs-6" name="first_name" placeholder="required" value="<?php echo set_value('first_name'); ?>">
					<label class="col-sm-2 col-xs-5" >Middle</label><input type="text" class="col-sm-2 col-xs-6"  name="middle_name" value="<?php echo set_value('middle_name'); ?>">
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="last_name" placeholder="required" value="<?php echo set_value('last_name'); ?>">
				</div><!-- row -->
				<div class="row">
					<label class="col-sm-2 col-xs-5" >Date of Birth</label><input type="date" class="col-sm-2 col-xs-6"  name="birth_date" placeholder="required" value="<?php echo set_value('birthdate'); ?>" >
					<label class="col-sm-2 col-xs-5" >GHC ID</label><input type="text" class="col-sm-2 col-xs-6"  name="GHC_ID" value="<?php echo set_value('GHC_ID'); ?>">
					<label class="col-sm-1 col-xs-5" >Maiden </label><input type="text" class="col-sm-2 col-xs-6"  name="maiden_name" value="<?php echo set_value('maiden_name'); ?>" placeholder="if applicable">
				</div><!-- row -->
	
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              