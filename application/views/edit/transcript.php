 <div class="main container">
 <h2>The following Transcript information has been submitted:</h2>
 <h3><?=$transcript->submission_date ?>
 <a href="<?=$transcript->image ?>" >Image</a>
 <?=$transcript->school ?></h3>

	<h1>
	Please upload a copy of your transcript
	</h1>
<form action='<?=base_url("transcript/put/$transcript->transcript_id")?>' id="transcript" method="post" enctype="multipart/form-data"">
<input type="file" name="fileToUpload" id="cpr"><br>

 School

 <input type="text" name="school" placeholder="required" value="<?=$transcript->school ?>">

State

<input type="text" name="state" placeholder="required" value="<?=$transcript->state ?>">



	<input type="submit" class="btn btn-primary btn-lg center-block" value="Update" />
	


</form>
</div>
</body>
</html>
