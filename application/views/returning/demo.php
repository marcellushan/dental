 <div class="main container">
	<h1 class= "mytitle">Demographic Questions</h1>

	<form action="updateApplicant" method="post">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-4">
					<h4>Race</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="race" value="1" <?=(@$applicant->race=='1' ? "checked" :"" )?>>White</h4>
						<h4><input type="radio" name="race" value="2" <?=(@$applicant->race=='2' ? "checked" :"" )?>>Black</h4>
						<h4><input type="radio" name="race" value="3" <?=(@$applicant->race=='3' ? "checked" :"" )?>>Asian American Indian / Alaska Native</h4>
						<h4><input type="radio" name="race" value="4" <?=(@$applicant->race=='4' ? "checked" :"" )?>>Native Hawaiian/other Pacific Islander</h4>
						<h4><input type="radio" name="race" value="5" <?=(@$applicant->race=='5' ? "checked" :"" )?>>Multiracial</h4>
						
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
						<h4><input type="radio" name="latino" value="1" <?=(@$applicant->latino ? "checked" :"" )?>>Hispanic/Latino</h4>
						<h4><input type="radio" name="latino" value="0" <?=(! @$applicant->latino ? "checked" :"" )?>>Non Hispanic/Latino</h4>
					</div>
					<div class="col-md-4">
						<h4>Gender</h4>
					</div>
					<div class="col-md-8">
						<h4><input type="radio" name="gender" value="1"  <?=(@$applicant->gender ? "checked" :"" )?>>Male</h4>
						<h4><input type="radio" name="gender" value="0" <?=(! @$applicant->gender ? "checked" :"" )?>>Female</h4>
					</div>
					<div class="col-md-4 col-xs-8">
					<h4>Foreign Student?</h4>
					</div>
					<div class="col-md-8 col-xs-4">
						<h4><input type="radio" name="foreign" value="1"  <?=(@$applicant->foreign ? "checked" :"" )?>></h4>
						<h4><input type="radio" name="foreign" value="0"  <?=(@$applicant->foreign ? "checked" :"" )?>></h4>
						
					</div>
				</div>
		</div>
	</div>
			<div class="wrapper">			
        <button type="submit" class="btn-lg btn-primary">Update Demographics</button>
        	    </div>
	</form>


</div><!-- container -->
              