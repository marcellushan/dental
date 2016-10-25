 <div class="main container">
	<h1>
	EMERGENCY CONTACT
	</h1>

	<form action="program" method="post">
		<fieldset>
			<h2>Name</h2>
				<div class="row">
					<?php //echo form_error('first'); ?>
					<label class="col-sm-2 col-xs-5" >First</label><input type="text" class="col-sm-2 col-xs-6" name="first" value="<?php echo set_value('first'); ?>" >
					<label class="col-sm-2 col-xs-5" >Middle</label><input type="text" class="col-sm-2 col-xs-6"  name="middle"  >
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="last" >
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
						<label class="col-lg-2 col-xs-4">State</label><input type="text" class="col-lg-1 col-xs-7" name="st" >
						<label class="col-lg-2 col-xs-4">Zip</label><input type="text" class="col-lg-1 col-xs-7" name="zip" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
				<div class="col-md-6 col-xs-12">
					<div class="row">
						<label class="col-xs-5">Home Phone</label><input type="text" class="col-xs-6" name="homephone" >
						<label class="col-xs-5">Cell Phone</label><input type="text" class="col-xs-6" name="cellphone" >
						<label class="col-xs-5">Home Email</label><input type="text" class="col-xs-6" name="homeemail" >
						<label class="col-xs-5">Work Email</label><input type="text" class="col-xs-6" name="workemail" >
					</div><!-- row -->
				</div><!-- col-md-6 col-xs-12 -->
			</div><!-- row -->
			<div class="wrapper">
    <button class="btn-lg btn-primary">Go to Program Questions</button>
</div>
		</fieldset>
	</form>
		 <br>
</div><!-- container -->
              