<div class="main container">
	<div class="row">
		<div class="col-md-6">
		<h3>New Applicant</h3>
			<?php echo validation_errors(); ?>
			<form action="new_applicant" method="post">
				<fieldset>
				<div class="row">
					<label class="col-md-4">Email </label><input type="text" class="col-md-6" name="email" value="<?=set_value('email') ?>">
					<label class="col-md-4">Create Password</label> <input type="password" class="col-md-6" name="password" value="<?=set_value('password') ?>">
					<label class="col-md-4">Confirm Password</label><input type="password" class="col-md-6" name="passconf" value="<?=set_value('passconf') ?>">
					<div class="col-md-12"><button type="submit">Submit</button></div>
				</div>
				
				
				</fieldset>
			</form>
		</div>
		<div class="col-md-6">
		
		<h3>Returning Applicant</h3>
			<form action="returning_applicant" method="post">
				<fieldset>
					<div class="row">
						<label class="col-md-4">Email </label><input type="text" class="col-md-6" name="email">
						<label class="col-md-4">Password</label> <input type="password" class="col-md-6" name="password">
						<div class="col-md-12"><button type="submit">Submit</button></div>
					</div>
				</fieldset>
			</form>
		</div>
	
	
	
	</div>
