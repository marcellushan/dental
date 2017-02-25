 <div class="main container">
	<h1 class= "mytitle">Demographics</h1>
	<h2 class="wrapper">For Data Collection purposes only</h2>
	<form action='<?=base_url("applicant/put/complete")?>' method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
					<h4>Race</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="race" value="1">White</h4>
						<h4><input type="radio" name="race" value="2">Black</h4>
						<h4><input type="radio" name="race" value="3">Asian American Indian / Alaska Native</h4>
						<h4><input type="radio" name="race" value="4">Native Hawaiian/other Pacific Islander</h4>
						<h4><input type="radio" name="race" value="5">Multiracial</h4>
						<h4><input type="radio" name="race" value="6">Other</h4>
					</div>
				</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
						<h4>Ethnicity</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="latino" value="1">Hispanic/Latino</h4>
						<h4><input type="radio" name="latino" value="0">Non Hispanic/Latino</h4>
					</div>
					<div class="col-md-4">
						<h4>Gender</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="gender" value="1">Male</h4>
						<h4><input type="radio" name="gender" value="2">Female</h4>
					</div>
					<div class="col-md-4 col-xs-8">
					<h4>Foreign Student?</h4>
					</div>
					<div class="col-md-8 col-xs-4">
						<h4><input type="radio" name="foreign" value="1">Yes</h4>
						<h4><input type="radio" name="foreign" value="2">No</h4>
						
					</div>
				</div>
		</div>
	</div>
			<div class="wrapper">			
        <button type="submit" class="btn-lg btn-primary">Next</button>
        	    </div>
	</form>


</div><!-- container -->
              