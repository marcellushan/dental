<div class="main container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="wrapper">Returning Applicant Login</h1>

			<h2 class="wrapper">Please login using your email address and password</h2>
			<?php echo validation_errors(); ?>
			<form action="../checkLogin" method="post">
				<fieldset>
					<div class="row">
						<label class="col-md-2 col-md-offset-2">Email </label><input type="text" class="col-md-6" name="email">
						<label class="col-md-2 col-md-offset-2">Password</label> <input type="password" class="col-md-6" name="password">
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-4"><button type="submit"class="btn btn-lg btn-success">Submit</button></div>

					</div>
				</fieldset>
			</form>
		</div>
