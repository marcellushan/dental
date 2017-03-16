 <div class="main container">
	<h1 class= "mytitle">Demographics</h1>
	<h2 class="wrapper">For Data Collection purposes only</h2>
     <? (@$edit ? $destination="edit" : $destination = "complete") ?>
	<form action='<?=base_url("applicant/put/" . $destination)?>' method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
					<h4>Race</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="race" value="1" <? echo (@$applicant->race==1 ? "checked" : "") ?>>White</h4>
						<h4><input type="radio" name="race" value="2" <? echo (@$applicant->race==2 ? "checked" : "") ?>>Black</h4>
						<h4><input type="radio" name="race" value="3" <? echo (@$applicant->race==3 ? "checked" : "") ?>>Asian American Indian / Alaska Native</h4>
						<h4><input type="radio" name="race" value="4" <? echo (@$applicant->race==4 ? "checked" : "") ?>>Native Hawaiian/other Pacific Islander</h4>
						<h4><input type="radio" name="race" value="5" <? echo (@$applicant->race==5 ? "checked" : "") ?>>Multiracial</h4>
						<h4><input type="radio" name="race" value="6" <? echo (@$applicant->race==6 ? "checked" : "") ?>>Other</h4>
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
						<h4><input type="radio" name="latino" value="1" <? echo (@$applicant->latino==1 ? "checked" : "") ?>>Hispanic/Latino</h4>
						<h4><input type="radio" name="latino" value="2" <? echo (@$applicant->latino==2 ? "checked" : "") ?>>Non Hispanic/Latino</h4>
					</div>
					<div class="col-md-4">
						<h4>Gender</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="gender" value="1" <? echo (@$applicant->gender==1 ? "checked" : "") ?>>Male</h4>
						<h4><input type="radio" name="gender" value="2" <? echo (@$applicant->gender==2 ? "checked" : "") ?>>Female</h4>
					</div>
					<div class="col-md-4 col-xs-8">
					<h4>Foreign Student?</h4>
					</div>
					<div class="col-md-8 col-xs-4">
						<h4><input type="radio" name="foreign" value="1" <? echo (@$applicant->foreign==1 ? "checked" : "") ?>>Yes</h4>
						<h4><input type="radio" name="foreign" value="2" <? echo (@$applicant->foreign==2 ? "checked" : "") ?>>No</h4>
						
					</div>
				</div>
		</div>
	</div>
			<div class="wrapper">			
        <button type="submit" class="btn-lg btn-primary">Next</button>
        	    </div>
	</form>
</div>

</div><!-- container -->
              