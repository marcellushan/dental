 <div class="main container">
	<h1 class= "mytitle">
		LICENSURE INFORMATION
	</h1>
<?php echo validation_errors(); ?>
	<form action="newLicense" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>State</h3>
			</div>
			<select class="col-lg-1 col-xs-7" name="state">
			<option value="GA">GA</option>
			<?php
				foreach ($states as $state):?>
			  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
				<? endforeach;?>
			</select>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>License Number</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="number"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Active?</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="checkbox" name="active" value="1"></h3>
			</div>
		</div>
<input type="file" name="fileToUpload" id="driver"><br>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit License Information</button>
			</div>
		</form>
	
	
</div><!-- container -->
              