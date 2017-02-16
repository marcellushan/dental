 <div class="main container">
	<h1>
	Please upload a copy of a valid form of Identification
	</h1>
	<?php echo validation_errors(); ?>

<h2>
	 <ul>
		 <li>Valid State issued Driver's License</li>
		 <li>Valid State issued Identification Card</li>
		 <li>Valid Federal Passport</li>
	 </ul>
 </h2>
<form action='<?=base_url("identification/post/cpr")?>' method="post" enctype="multipart/form-data"  onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="driver"><br>

	<input type="submit" class="btn btn-primary btn-lg center-block" id="driverBtn" value="Submit" />

</form>
</div>
</body>
</html>
