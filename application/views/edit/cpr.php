 <div class="main container">
 <h2>The following CPR information has been submitted:</h2>
 <h3><?=@$cpr->submission_date ?>
 <a href="<?=@$cpr->image ?>" >Image</a>
 <?=@$cpr->expiration_date ?></h3>

	<h1>
	Please upload a copy of your current valid CPR certificate
	</h1>
<?php echo validation_errors(); ?>
<form action="../../cpr/put/<?=@$cpr->cpr_id ?>" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="cpr"><br>

Expiration Date

<input type="date" name="expiration_date" placeholder="required" value="<?php echo set_value('expiration_date'); ?>">

	<input type="submit" class="btn btn-primary btn-lg center-block" id="cprBtn" value="Update CPR" />
	


</form>
</div>
</body>
</html>
