 <div class="main container">
	<h1>
	Please upload a copy of a valid form of Identification
	</h1>
	<?php echo validation_errors(); ?>

<form action="../createImage/identification/cpr" method="post" enctype="multipart/form-data"  onsubmit="return Validate(this);"> 
<input type="file" name="fileToUpload" id="driver"><br>

	<input type="submit" class="btn btn-primary btn-lg center-block" id="driverBtn" value="Submit" />

</form>
</div>
</body>
</html>