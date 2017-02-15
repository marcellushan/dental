<div class="main container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="wrapper">Sign Up</h1>

			<h2>It is required that you create an account prior to submitting an application.</h2>

			<h2>Please create an an account using a valid email address and a unique password.</h2>
			<?php echo validation_errors(); ?>
			<form action='<?=base_url("home/save")?>' method="post">
				<fieldset>
				<div class="row"><h3>
					<label class="col-md-4">Email </label><input type="text" class="col-md-6" name="email" value="<?=set_value('email') ?>" required>
					<label class="col-md-4">Create Password</label> <input type="password" class="col-md-6" name="password" value="<?=set_value('password') ?>" required>
					<label class="col-md-4">Confirm Password</label><input type="password" class="col-md-6" name="passconf" value="<?=set_value('passconf') ?>" ></h3>
					<div class="col-md-12"><button type="submit">Submit</button></div>
				</div>
				
				
				</fieldset>
			</form>

			<h2>If an account has been previously created, please proceed to the user login page</h2>

			<div class="wrapper" ><a class="btn btn-lg btn-success" href='<?=base_url("home/display/login")?>'>Login with Email Address</a></div>
		</div>


