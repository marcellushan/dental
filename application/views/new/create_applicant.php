<div class="main container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="wrapper">New Applicant</h1>
			<?php echo validation_errors(); ?>
			<form action="viewPersonal/" method="post">
				<fieldset>
				<div class="row"><h3>
					<label class="col-md-4">Email </label><input type="text" class="col-md-6" name="email" value="<?=set_value('email') ?>">
					<label class="col-md-4">Create Password</label> <input type="password" class="col-md-6" name="password" value="<?=set_value('password') ?>">
					<label class="col-md-4">Confirm Password</label><input type="password" class="col-md-6" name="passconf" value="<?=set_value('passconf') ?>"></h3>
					<div class="col-md-12"><button type="submit">Submit</button></div>
				</div>
				
				
				</fieldset>
			</form>
		</div>
