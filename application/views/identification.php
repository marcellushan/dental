 <div class="main container">
 <? if(@$identifications):?>
    <table class="table">
    	<tr>
    		<th>Submission Date</th>
    		<th>Image</th>
    	</tr>
    	<? foreach ($identifications as $identification):?>
    	<tr>
    		<td><?=$identification->submission_date ?></td>
    		<td><a href="<?=$identification->image ?>" >Image</a></td>
    	</tr>
    	<?php endforeach;?>
    </table>
    <? else :?>	
    
    No Images
    
    <? endif?>
	
	
	
	<h1>
	Please upload a copy of a valid form of Identification
	</h1>
	<?php echo validation_errors(); ?>

<form action="addIdentification" method="post" enctype="multipart/form-data"  onsubmit="return Validate(this);"> 
<input type="file" name="fileToUpload" id="driver"><br>

	<input type="submit" class="btn btn-primary btn-lg center-block" id="driverBtn" value="Submit" />

</form>
</div>
</body>
</html>
