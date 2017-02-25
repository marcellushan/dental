 <div class="main container">
	<h1 class= "mytitle">
		TRANSCRIPT INFORMATION
	</h1>
 <? if(@$transcripts):?>
 <h2>Existing Transcripts(s)</h2>
    <table class="table">
    	<tr>
    		<th>Submission Date</th>
    		<th>School</th>
			<th>State</th>
    		<th>Image</th>
    		<th></th>
    		
    	</tr>
    	<? foreach ($transcripts as $transcript):?>
    	<tr>
    		<td><?=$transcript->submission_date ?></td>
    		<td><?=$transcript->school ?></td>
			<td><?=$transcript->state ?></td>
    		<td><? if($transcript->image =="No Image") :?>
                    No Image
                    <? else: ?>
                    <a href="<? echo $transcript->image ?>" target="_blank" >Image</a>
                <? endif;?>
				</td>
				<td><a href="../get/<?=$transcript->transcript_id ?>" >Update</a>
				</td>

    	</tr>
    	<?php endforeach;?>
    </table>
    <? endif;?>

<h2>Add a New Transcript</h2>
	<?php echo validation_errors(); ?>
	<form action='<?=base_url("transcript/post/")?>' method="post" id="transcript" enctype="multipart/form-data">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>School</h3>
			</div>
			<div class="col-md-3">
				<h3><input type="text" name="school"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<h3>State</h3>
			</div>
			<select class="col-lg-1 col-xs-7" name="state">
			<option value="GA">GA</option>
			<?php
				foreach ($states as $state):?>
			  <option value="<?=$state->abbreviation?>"><?=$state->abbreviation?></option>
				<? endforeach;?>
			</select>
		</div>

<input type="file" name="fileToUpload" id="driver"><br>
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Submit Transcript Information</button>
			</div>
        <p></p>
		</form>
	
	
</div><!-- container -->
              