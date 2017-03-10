 <div class="main container">
     <? (@$edit ? $destination="edit" : $destination = "school") ?>
     <?php if(@$applicant->cpr) :?>
         <h2>The following CPR Certificate has been submitted:</h2>
         <h3><a href="<?=$applicant->cpr ?>" >Image</a></h3>
         <h3><?=$applicant->cpr_expiration_date ?></h3>

     <?php endif ?>
     <h1>
	<h1>
	Please upload a copy of your current valid CPR certificate and expiration date.
	</h1>

	 <h2>The expiration date must be beyond the semester start date.</h2>
         <br><br>
<form action='<?=base_url("applicant/put_image/cpr/" . $destination)?>' method="post" enctype="multipart/form-data" id="cpr" onsubmit="return Validate(this);">
<h3><input type="file" name="fileToUpload" id="cpr"></h3>

<h3>Expiration Date

<input type="date" name="cpr_expiration_date" placeholder="YYYY-MM-DD"></h3>

	<input type="submit" class="btn btn-primary btn-lg center-block" value="Submit" />
	


</form>
</div>
</body>
</html>
