 <div class="main container">
	<h1 class= "mytitle">EMPLOYMENT INFORMATION	</h1>
	<h2 class="wrapper">Please enter the employer name and telephone number</h2>
	<form action='<?=base_url("employer/post")?>' id="employer" method="post">
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
        <button type="submit" class="btn-lg btn-primary">Add New Employer</button>
        	    </div>
        	    <br>
	</form>
</div><!-- container -->
              