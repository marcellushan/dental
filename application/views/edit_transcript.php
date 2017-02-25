 <div class="main container">
	<h1 class= "mytitle">
		Dental Transcript <a href="<?=$transcript->image ?>">Image</a>
	</h1>
	<form action='<?=base_url("transcript/put/" . $transcript->transcript_id)?>' method="post" id="transcript" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>School</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="school" value="<?=$transcript->school ?>"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>State</h3>
			</div>
            <div class="col-md-3">
                <h3><input type="text" name="state" value="<?=$transcript->state ?>"></h3>
            </div>
		</div>
<input type="file" name="fileToUpload" id="driver"><br>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit Transcript Information</button>
			</div>
		</form>
	
	
</div><!-- container -->
              