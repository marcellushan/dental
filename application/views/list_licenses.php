 <div class="main container">
 <h3 class="mytitle">Admission Information</h3>
 
	<h1 class= "mytitle">
	EMERGENCY CONTACT INFORMATION
	</h1>

<?php echo validation_errors(); ?>
	<form action='<?=base_url("applicant/put/employed")?>' id="emergency" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					<div class="col-sm-2 col-xs-5"> <label>First</label></div><div class="col-sm-2 col-xs-6"><input type="text" name="e_first_name" placeholder="required"></div>
					<div class="col-sm-2 col-xs-5"> <label>Last</label></div><div class="col-sm-2 col-xs-6"><input type="text" name="e_last_name" placeholder="required"></div>
					<label class="col-sm-2 col-xs-5" >Relationship</label>
								<select class="col-lg-1 col-xs-7" name="relationship">
									<option value="">Select</option>
									<option value="Parent">Parent</option>
									<option value="Sibling">Sibling</option>
									<option value="Other Relative">Other Relative</option>
									<option value="Friend">Friend</option>
								</select>
				</div><!-- row -->
			<div class="row">
				<h2 class="col-lg-6 col-xs-12">Address</h2>
				<h2 class="col-lg-6 visible-lg">Phone and Email</h2>
			</div><!-- row -->
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<div class="col-lg-2 col-xs-4"><label>Street</label></div><div><input  class="col-lg-10 col-xs-7" type="text" name="e_street" placeholder="required" ></div>
						<div class="col-lg-2 col-xs-4"><label>City</label></div><div><input type="text" class="col-lg-10 col-xs-7" name="e_city" placeholder="required" ></div>
						<label class="col-lg-1 col-xs-4">State</label>	<select class="col-lg-1 col-xs-7" name="e_state">
																			<option value="GA">GA</option>
																				<?php
																					foreach ($states as $state):?>
																				  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
																					<? endforeach;?>
																				</select>
						<label class="col-lg-2 col-xs-12">Zip</label><input type="text" class="col-lg-2 col-xs-6" name="e_zip" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<div class="col-xs-5"><label>Preferred Phone</label></div><div><input type="text" class="col-xs-6"name="e_preferred_phone" placeholder="required"></div>
						<div class="col-xs-5"><label>Backup Phone</label></div><div class="col-xs-6"><input type="text" name="e_backup_phone"></div>
						<div class="col-xs-5"><label>Email</label></div><div class="col-xs-6"><input type="text" name="e_email"></div>
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
			</div><!-- row -->
	
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              