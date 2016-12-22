 <div class="main container">
	<h1 class= "mytitle">
DENTAL HYGIENE SCHOOL
	</h1>
<?php echo validation_errors(); ?>
	<form action='<?=base_url("home/updateImage/school")?>' method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>School Attended</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="name" value="<?=$school->name ?>"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>State</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="state" value="<?=$school->state ?>"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Year of Graduation</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="year"  value="<?=$school->year ?>"></h3>
			</div>
		</div>
		<? if($school->image):?>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>Copy of Transcript</h3>
			</div>
			<div class="col-md-3">
				<h3><a href="<?=$school->image?>">Image</a></h3>
			</div>
		</div>
		<? endif?>
		
		<form action="updateIdentification" method="post" enctype="multipart/form-data"  onsubmit="return Validate(this);"> 
<input type="file" name="fileToUpload" id="driver"><br>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Update School Information</button>
			</div>
	</form>
	
</div><!-- container -->
              