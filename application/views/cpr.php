 <div class="main container">
 
	<h1>
	Please upload a copy of your current valid CPR certificate and expiration date.
	</h1>

	 <h2>The expiration date must be beyond the semester start date.</h2>
<?php echo validation_errors(); ?>
<form action='<?=base_url("applicant/put_image/cpr/school")?>' method="post" enctype="multipart/form-data" id="cpr" onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="cpr"><br>

Expiration Date

<input type="date" name="cpr_expiration_date" placeholder="YYYY-MM-DD">

	<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit" />
	


</form>
</div>
</body>
</html>
