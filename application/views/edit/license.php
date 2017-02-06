 <div class="main container">
 <h2>The following License information has been submitted:</h2>
 <h3><?=$license->submission_date ?>
 <a href="<?=$license->image ?>" >Image</a>
 <?=$license->number ?></h3>

	<h1>
	Please upload a copy of your license
	</h1>
<?php echo validation_errors(); ?>
<form action='<?=base_url("home/updateLicense")?>' method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="cpr"><br>

State

<input type="text" name="state" placeholder="required" value="<?=$license->state ?>">

Number

<input type="text" name="number" placeholder="required" value="<?=$license->number ?>">

Active

<input type="text" name="active" placeholder="required" value="<?=$license->active ?>">

	<input type="submit" class="btn btn-primary btn-lg center-block" id="cprBtn" value="Submit" />
	


</form>
</div>
</body>
</html>
