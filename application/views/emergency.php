 <div class="main container">
	<h1>
	EMERGENCY CONTACT
	</h1>

	<form action="employer" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					<?php //echo form_error('first'); ?>
					<label class="col-sm-1 col-xs-5" >First</label><input type="text" class="col-sm-2 col-xs-6" name="first_name" value="<?php echo set_value('first'); ?>" >
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="last_name" >
					<label class="col-sm-2 col-xs-5" >Relationship</label><input type="text" class="col-sm-2 col-xs-6"  name="relationship" >
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
						<label class="col-lg-1 col-xs-4">State</label><select class="col-lg-1 col-xs-7" name="state">
							<option value="GA">GA</option>
			<?php
				foreach ($states as $state):?>
			  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
				<? endforeach;?>
			</select>
						<label class="col-lg-1 col-xs-4">Zip</label><input type="text" class="col-lg-2 col-xs-7" name="zip" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-xs-5">Preferred Phone</label><input type="text" class="col-xs-6" name="home_phone" >
						<label class="col-xs-5">Backup Phone</label><input type="text" class="col-xs-6" name="cell_phone" >
						<label class="col-xs-5">Email</label><input type="text" class="col-xs-6" name="home_email" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
			</div><!-- row -->
			<div class="wrapper">
    <button type="submit" class="btn-lg btn-primary">Go to Employers</button>
</div>
		</fieldset>
	</form>
		 <br>
</div><!-- container -->
              