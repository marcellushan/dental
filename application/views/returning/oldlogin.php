<div class="main container">
	<div class="row">
		<div class="col-md-12">
		<h1 class="wrapper">Returning Applicant</h1>
			<?php echo validation_errors(); ?>
			<form action="review" method="post">
				<fieldset>
					<div class="row">
						<label class="col-md-4">Email </label><input type="text" class="col-md-6" name="email">
						<label class="col-md-4">Password</label> <input type="password" class="col-md-6" name="password">
						<div class="col-md-12"><button type="submit">Submit</button></div>
					</div>
				</fieldset>
			</form>
		</div>
