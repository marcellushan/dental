 <div class="main container">
	<h1>
	Please upload a copy of your current valid CPR certificate
	</h1>
<form action="school" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload"><br>

Expiration Date

<input type="date" name="expiration_date" placeholder="required" value="<?php echo set_value('expiration_date'); ?>">

	<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit" />
	


</form>
</div>
</body>
</html>
