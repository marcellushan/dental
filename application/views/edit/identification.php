 <div class="main container">
 <?php if($identification) :?>
<h2>The following identification has been submitted:</h2>
 <h3><?=$identification->submission_date ?>
 <a href="<?=$identification->image ?>" >Image</a></h3>
   
	<?php endif ?>
	<h1>
Select a new file to update identification
	</h1>


<form action="../put/<?=@$identification->identification_id ?>" method="post" enctype="multipart/form-data"  onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="identification"><br>

	<input type="submit" class="btn btn-primary btn-lg center-block" id="identificationBtn" value="Update Identification" />

</form>
</div>
</body>
</html>
