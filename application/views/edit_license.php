 <div class="main container">
	<h1 class= "mytitle">
		License <a href="<?=$license->image ?>">Image</a>
	</h1>
	<form action='<?=base_url("license/put/" . $license->license_id)?>' method="post" id="license" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Number</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="number" value="<?=$license->number ?>"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>State</h3>
			</div>
            <div class="col-md-3">
                <h3><input type="text" name="state" value="<?=$license->state ?>"></h3>
            </div>
		</div>
<input type="file" name="fileToUpload" id="driver"><br>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit license Information</button>
			</div>
		</form>
	
	
</div><!-- container -->
              