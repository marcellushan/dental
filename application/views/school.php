 <div class="main container">
	<h1 class= "mytitle">
DENTAL HYGIENE SCHOOL
	</h1>
<?php echo validation_errors(); ?>
	<form action='<?=base_url("applicant/put/have_license")?>' method="post" id="school" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>School Attended</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="school"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>State</h3>
			</div>
			<select class="col-lg-1 col-xs-7" name="school_state">
			<option value="GA">GA</option>
			<?php
				foreach ($states as $state):?>
			  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
				<? endforeach;?>
			</select>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Year of Graduation</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="school_year"></h3>
			</div>
		</div>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit School Information</button>
			</div>
	</form>
	
</div><!-- container -->
              