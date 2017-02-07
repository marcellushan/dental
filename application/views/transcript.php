 <div class="main container">
	<h1 class= "mytitle">
		Dental Transcript
	</h1>
<?php echo validation_errors(); ?>
	<form action='<?=base_url("image/post/transcript/more_transcripts")?>' method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>School</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="school"></h3>
			</div>
		</div>
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
<input type="file" name="fileToUpload" id="driver"><br>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit Transcript Information</button>
			</div>
		</form>
	
	
</div><!-- container -->
              