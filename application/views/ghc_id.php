 <div class="main container">
	<h1 class= "mytitle">
Enter GHC ID
	</h1>
<?php echo validation_errors(); ?>
	<form action='<?=base_url("applicant/post")?>' method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>GHC ID</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="GHC_ID"></h3>
			</div>
		</div>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit</button>
			</div>
	</form>
	
</div><!-- container -->
              