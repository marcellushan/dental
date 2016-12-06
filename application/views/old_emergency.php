 <div class="main container">

	<h1 class= "mytitle">
	EMERGENCY CONTACT INFORMATION
	</h1>

<?php echo validation_errors(); ?>
	<?php echo form_open('home/address'); ?>
		<fieldset>
			<h2>Name</h2>
				<div class="row">	
					<label class="col-sm-2 col-xs-5" >First</label><input type="text" class="col-sm-2 col-xs-6" name="first_name" placeholder="required" value="<?php echo set_value('first_name'); ?>">
					<label class="col-sm-1 col-xs-5" >Last</label><input type="text" class="col-sm-2 col-xs-6"  name="last_name" placeholder="required" value="<?php echo set_value('last_name'); ?>">
					<label class="col-sm-2 col-xs-5" >Relationship</label><input type="text" class="col-sm-2 col-xs-6"  name="relationship" value="<?php echo set_value('relationship'); ?>">
					
				</div><!-- row -->
			<div class="wrapper">
				<button type="submit" class="btn-lg btn-primary">Next</button>
			</div>
   		</fieldset>
	</form>

	   
	
	 <br>
</div><!-- container -->
              