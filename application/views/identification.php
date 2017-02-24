 <div class="main container">
		 <? (@$edit ? $destination="edit" : $destination = "cpr") ?>
	 <?php if(@$applicant->identification) :?>
		 <h2>The following identification has been submitted:</h2>
			 <h3><a href="<?=$applicant->identification ?>" >Image</a></h3>

	 <?php endif ?>
	<h1>
	Please upload a copy of a valid form of Identification
	</h1>
<h2>
	 <ul>
		 <li>Valid State issued Driver's License</li>
		 <li>Valid State issued Identification Card</li>
		 <li>Valid Federal Passport</li>
	 </ul>
 </h2>
	 <? (@$edit ? $destination="edit" : $destination = "identification") ?>
<form action='<?=base_url("applicant/put_image/" . $destination)?>' method="post" enctype="multipart/form-data"  id="identification" onsubmit="return Validate(this);">
<input type="file" name="fileToUpload"><br>

	<input type="submit" class="btn btn-primary btn-lg center-block" id="driverBtn" value="Submit" />

</form>
</div>
</body>
</html>
