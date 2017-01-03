 <div class="main container">
	<h1 class= "mytitle">EMPLOYMENT INFORMATION	</h1>

	<form action='<?=base_url("home/createEmployer")?>' method="post">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Are you Currently Employed?</h3>
			</div>
			<div class="col-md-3">
				<h3>Yes&nbsp;<input type="radio" name="current" value="1"></h3>
				<h3>No&nbsp;<input type="radio" name="current" value="0"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Name of Employer</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="company"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Phone</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="phone"></h3>
			</div>
		</div>
					<div class="wrapper">			
        <button type="submit" class="btn-lg btn-primary">Next</button>
        	    </div>
        	    <br>
	</form>
</div><!-- container -->
              