 <div class="main container">
 
	<h1>
	Please upload a copy of your current valid CPR certificate
	</h1>
<?php echo validation_errors(); ?>
<form action='<?=base_url("cpr/post/school")?>' method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="cpr"><br>

Expiration Date

<input type="date" name="expiration_date" placeholder="required" value="<?php echo set_value('expiration_date'); ?>">

	<input type="submit" class="btn btn-primary btn-lg center-block" id="cprBtn" value="Submit" />
	


</form>
</div>
</body>
</html>
