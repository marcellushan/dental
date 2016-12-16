 <div class="main container">
  <? if(@$CPRs):?>
    <table class="table">
    	<tr>
    		<th>Submission Date</th>
    		<th>Expiration Date</th>
    		<th>Image</th>
    	</tr>
    	<? foreach ($CPRs as $CPR):?>
    	<tr>
    		<td><?=$CPR->submission_date ?></td>
    		<td><?=$CPR->expiration_date ?></td>
    		<td><a href="<?=$CPR->image ?>" >Image</a></td>
    	</tr>
    	<?php endforeach;?>
    </table>
    <? else :?>	
    
    No Images
    
    <? endif?>
	
 
	<h1>
	Please upload a copy of your current valid CPR certificate
	</h1>
<?php echo validation_errors(); ?>
<form action="school" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
<input type="file" name="fileToUpload" id="cpr"><br>

Expiration Date

<input type="date" name="expiration_date" placeholder="required" value="<?php echo set_value('expiration_date'); ?>">

	<input type="submit" class="btn btn-primary btn-lg center-block" id="cprBtn" value="Submit" />
	


</form>
</div>
</body>
</html>
