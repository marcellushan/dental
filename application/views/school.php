 <div class="main container">
     <? (@$edit ? $destination="edit" : $destination = "have_license") ?>
     <?php if(@$applicant->school) :?>
         <h2>The following School information has been submitted:</h2>
		 <div class="row">
			 <div class="col-md-4 col-md-offset-2">
				 <h3><?=$applicant->school ?></h3>
			 </div>
			 <div class="col-md-2"><h3><?=$applicant->school_state ?></h3></div>
			 <div class="col-md-2"><h3><?=$applicant->school_year ?></h3></div>
		 </div>

     <?php endif ?>
	<h1 class= "mytitle">
DENTAL HYGIENE SCHOOL
	</h1>
	<form action='<?=base_url("applicant/put/" . $destination)?>' method="post" id="school">
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
			<h3><select class="col-lg-1 col-xs-7" name="school_state">
			<option value="GA">GA</option>
			<?php
				foreach ($states as $state):?>
			 <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
				<? endforeach;?>
			</select></h3>
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
              